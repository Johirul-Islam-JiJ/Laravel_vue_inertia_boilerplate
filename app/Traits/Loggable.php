<?php

namespace App\Traits;

use App\Models\Log;

/**
 * logs activity of the model trait belongs to,
 * data is stored in logs table through polymorphic relationship between Log model and the model trait belongs to
 *
 * applies to any model with this trait
 */
trait Loggable
{
    /**
     * calls createdLog function of the trait itself on different model events
     *
     * @return void
     */
    public static function bootLoggable(): void
    {
        if (auth()->check())
        {
            static::created(function ($model) {
                self::createLog($model, 'Created');
            });

            static::updated(function ($model) {
                if (in_array('Illuminate\Database\Eloquent\SoftDeletes', class_uses($model)))
                    if ($model->getRawOriginal('deleted_at'))
                        self::createLog($model, 'Restored');
                    else
                        self::createLog($model, 'Updated');
                else
                    self::createLog($model, 'Updated');
            });

            static::deleted(function ($model) {
                if (in_array('Illuminate\Database\Eloquent\SoftDeletes', class_uses($model)))
                    if ($model->isForceDeleting())
                        self::createLog($model, 'Deleted');
                    else
                        self::createLog($model, 'Soft Deleted');
                else
                    self::createLog($model, 'Soft Deleted');
            });
        }
    }


    /**
     * sets the 'loggable_id', 'loggable_type', 'user_id', 'action' attributes of Log model
     *
     * @param object $model
     * @param string $activityName
     * @return void
     */
    protected static function createLog(object $model, string $activityName): void
    {
        $log = Log::create([
            'loggable_id' => $model->id,
            'loggable_type' => get_class($model),
            'user_id' => auth()->user()->id,
            'action' => $activityName
        ]);
        if ($log)
            $log->activity()->create([
                'before_change' => ($activityName === 'Created') ?: json_encode($model->getRawOriginal()),
                'after_change' => ($activityName === 'Deleted') ?: json_encode($model->getAttributes())
            ]);
    }
}
