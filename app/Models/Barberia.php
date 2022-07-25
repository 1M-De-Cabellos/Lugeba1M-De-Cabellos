<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barberia extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'lunes',
        'martes',
        'miercoles',
        'jueves',
        'sabado',
        'domingo',
        'estado',
        'municipio',
        'cp',
        'colonia',
        'calle',
        'n_casa',
    ];
}
