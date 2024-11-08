<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonio extends Model
{
    protected $table = 'testimonios';

    protected $fillable = [
        'nombre',
        'servicio',
        'testimonio',
        'imagen',
    ];
}
