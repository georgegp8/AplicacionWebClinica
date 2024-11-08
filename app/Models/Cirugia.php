<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cirugia extends Model
{
    protected $fillable = [
        'nombre',
        'descripcion_corta',
        'descripcion_larga',
    ];
}
