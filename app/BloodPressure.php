<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BloodPressure extends Model
{
    protected $fillable = [
        'bloodPressureID','illnessID','date','time','systolicPressure','diastolicPressure','heartRate','comment','created_at','updated_at'
    ];
}
