<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barberia extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'domingo',
        'lunes',
        'martes',
        'miercoles',
        'jueves',
        'sabado',
        'estado',
        'municipio',
        'cp',
        'colonia',
        'calle',
        'n_casa',
    ];
}
