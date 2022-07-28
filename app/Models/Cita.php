<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;
    protected $fillable = [
        'cliente_id',
        'barbero_id',
        'pago_id',
        'servicio_id',
        'horario_id',
        'fecha',
        'estado'
    ];
}
