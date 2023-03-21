<?php

namespace App\Models;

use App\Traits\ParseDeletedAt;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Log extends Model
{
    use SoftDeletes, ParseDeletedAt;

    protected $guarded = [];
    protected $with = ['user'];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->user_id = auth()->user()->id;
        });
    }

    public function getCreatedAtAttribute($value): ?string
    {
        if ($value)
            return Carbon::parse($value)->format('h:ia, Y-m-d');
        else
            return null;
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function loggable(): MorphTo
    {
        return $this->morphTo();
    }

    public function activity(): hasOne
    {
        return $this->hasOne(Activity::class);
    }
}
