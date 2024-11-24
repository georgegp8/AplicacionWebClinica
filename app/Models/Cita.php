<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;

    // Tabla asociada al modelo
    protected $table = 'citas';

    // Campos que se pueden asignar masivamente
    protected $fillable = [
        'nombres',
        'apellidos',
        'email',
        'telefono',
        'dni',
        'procedimiento',
        'comentarios',
    ];
}
