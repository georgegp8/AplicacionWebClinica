<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mensaje_tec extends Model
{
    protected $table = 'mensajes';
    protected $fillable = [
        'mensaje',
    ];
}
