<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Illness extends Model
{
    protected $fillable = [
        'illnessID','illnessType'
    ];
}
