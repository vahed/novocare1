<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vaccination extends Model
{
    protected $fillable = [
        'vaccineID','patientID','date','formulation','strength','dose'
    ];
}
