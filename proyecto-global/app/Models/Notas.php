<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notas extends Model
{
    protected $fillable = ['codigo', 'descripcion', 'cantidad', 'precio'];
}
