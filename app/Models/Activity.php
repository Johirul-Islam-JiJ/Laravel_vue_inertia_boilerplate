<?php

namespace App\Models;

use App\Traits\ParseDeletedAt;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Activity extends Model
{
    use SoftDeletes, ParseDeletedAt;

    protected $guarded = [];
    protected $casts = ['before_change' => 'array', 'after_change' => 'array'];

    public function log(): BelongsTo
    {
        return $this->belongsTo(Log::class);
    }
}
