<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Authenticatable
{
    use HasFactory;
    protected $fillable = [
        'nombres',
        'apellidos',
        'fecha_nac',
        'num_telefonico',
        'email',
        'password',
    ];
}
