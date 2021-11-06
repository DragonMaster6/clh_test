<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BpRecord extends Model
{
    protected $guarded = [];

    ///////////////
    // Accessors //
    ///////////////
    /**
     * Human Friendly read out of blood pressure
     */
    public function getBpRenderAttribute() {
        return "$this->systolic/$this->diastolic";
    }
}
