<?php

namespace App\Models;

use App\Traits\Loggable;
use App\Traits\ParseDeletedAt;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Settings extends Model
{
    use SoftDeletes, ParseDeletedAt, Loggable;

    protected $guarded = [];

    public function getLogoAttribute($value)
    {
        if ($value)
            return asset('storage/' . $value);

        return null;
    }
}
