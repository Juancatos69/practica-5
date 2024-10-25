<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    use HasFactory;

    // Definimos los atributos que se pueden asignar masivamente
    protected $fillable = [
        'material',
        'dimensiones',
        'estilo',
        'color',
    ];

    // Nombre de la tabla (opcional si el nombre de la tabla no sigue el plural estándar)
    protected $table = 'mesas';
}
