<?php

namespace App\Traits;

/**
 * parses the deleted_at column to more user-friendly way
 *
 * applies to model with softdeletes
 */
trait ParseDeletedAt
{
    /**
     * formats the deleted_at column to 'Active' or 'Inactive'
     *
     * @param $value
     * @return string
     */
    public function getDeletedAtAttribute($value): string
    {
        if ($value)
            return 'Inactive';

        return 'Active';
    }
}
