<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    protected $fillable = [
        'notesID','patientID','title','comment','date','picture'
    ];
}
