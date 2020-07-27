<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HealthVitals extends Model
{
    protected $fillable = [
        'vitalsID','patientID','height','weight','age','mobility'
    ];
}
