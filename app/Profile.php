<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'userID','id','firstname', 'lastname','usertype','gender','dateofbirth','phone','created_at','updated_at'
    ];
}
