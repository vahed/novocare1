<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
    protected $fillable = [
        'appointmentID','patientID','userID','date','time','location','reason'
    ];
}
