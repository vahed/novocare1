<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PatientIllness extends Model
{
    protected $fillable = [
        'patientIllnessID','patientID','illnessID'
    ];
}
