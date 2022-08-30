<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;


class Barbero extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        'nombres',
        'apellidos',
        'num_telefonico',
        'email',
        'foto',
        'password',
    ];
    protected $hidden = [
        'password',
        'api_token',
    ];
    public function servicios()
    {
        return $this->belongsTo(Servicio::class);
    }
}
