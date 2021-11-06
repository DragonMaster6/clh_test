<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Patient extends Model {
    use HasFactory;
    
    protected $guarded = [
        'ssn',
    ];

    ///////////////
    // Accessors //
    ///////////////
    /**
     * Combines the first and last name into one string
     */
    public function getFullnameAttribute() {
        return ucwords("$this->first_name $this->last_name");
    }

    //////////////////////////////
    // Relationship Definitions //
    //////////////////////////////
    /**
     * Each patient has multiple blood pressure readings
     */
    public function bp_records() {
        // return $this->hasMany(
        //     "App\Models\BpRecord",
        //     "id",
        //     "patient_id"
        // );
        return $this->hasMany(\App\Models\BpRecord::class);
    }
}
