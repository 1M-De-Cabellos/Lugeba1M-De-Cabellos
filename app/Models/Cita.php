<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cliente;
use App\Models\Barbero;
use App\Models\Pago;
use App\Models\Servicio;
use App\Models\Horario;

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
    public function clientes()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id', 'id');
    }
    public function barberos()
    {
        return $this->belongsTo(Barbero::class, 'barbero_id', 'id');
    }
    public function pagos()
    {
        return $this->belongsTo(Pago::class, 'pago_id', 'id');
    }
    public function servicios()
    {
        return $this->belongsTo(Servicio::class, 'servicio_id', 'id');
    }
    public function horarios()
    {
        return $this->belongsTo(Horario::class, 'horario_id', 'id');
    }
}
