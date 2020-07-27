<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'patientID','userID','nextOfKin','bloodType','isDisabled','created_at','updated_at'
    ];
}
