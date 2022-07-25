<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombres',
        'apellido_p',
        'apellido_m',
        'fecha_nac',
        'num_telefono',
        'email',
        'password',
    ];
}
