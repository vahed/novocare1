<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Allergies extends Model
{
    protected $fillable = [
        'allergyID','patientID','nameOfAllergy','typeOFAllergy','comment','dateOfDiagnosis'
    ];
}
