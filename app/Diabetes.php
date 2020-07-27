<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diabetes extends Model
{
    protected $fillable = [
        'diabetesID','illnessID','date','time','beforeFood','afterFood','sugerLevel','comment'
    ];
}
