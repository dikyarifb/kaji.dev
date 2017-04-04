<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class career extends Model
{
     protected $fillable = [
        'name', 'email', 'password',
    ];
    protected $table = 'career';
}
