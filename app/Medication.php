<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medication extends Model
{
    protected $fillable = [
        'medicationID','patientID','name','strength','formulation','dose','directions','medicationInformationID'
    ];
}
