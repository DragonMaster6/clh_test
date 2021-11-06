<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $guarded = [
        'ssn',
    ];

    //////////////////////////////
    // Relationship Definitions //
    //////////////////////////////
    /**
     * Each patient has multiple blood pressure readings
     */
    public function bp_records() {
        return $this->hasMany(
            "App\Models\BpRecord",
            "id",
            "patient_id"
        );
    }
}
