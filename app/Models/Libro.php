<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $table = 'libros';
    protected $fillable = ['titulo','autor','editorial'];
}
