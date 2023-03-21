<?php

namespace App\Models;

use App\Traits\Loggable;
use App\Traits\ParseDeletedAt;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use SoftDeletes, ParseDeletedAt, Loggable;

    protected $guarded = [];

    public function allowTo($permission)
    {
        if (is_string($permission))
            $permission = Permission::whereName($permission)->first();

        $this->permissions()->sync($permission, false);
    }

    public function permissions(): BelongsToMany
    {
        return $this->belongsToMany(Permission::class)->withTimestamps();
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}
