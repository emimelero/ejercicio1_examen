<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuario';

    protected $fillable = [
        'login',
        'password'
    ];

    protected $hidden = [
        'password',

    ];
}
