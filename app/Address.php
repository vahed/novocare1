<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'addressID','patientID','userID','type','name','street','town','county','postcode','telephone','fax','email'
    ];
}
