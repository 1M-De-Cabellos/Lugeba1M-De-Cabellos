<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cita;

class CitasController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'barbero_id'        => 'required',
            'pago_id'           => 'required',
            'servicio_id'       => 'required',
            'horario_id'        => 'required',
            'fecha'             => 'required'
        ]);
        $data = $request->all();
        $data['cliente_id'] = Auth::user()->id;
        $data['estado'] = 'P';
        Cita::create($data);
        return json_encode(['icono' => 'icofont-ui-check', 'color' => 'text-success', 'titulo' => 'Felicidades!!!', 'mensaje' => 'Cita agendada correctanente']);
    }
    public function getCitas($filtro)
    {
        $citas = Cita::where([['estado', $filtro],['cliente_id', Auth::user()->id]])->with(['clientes', 'barberos', 'pagos', 'servicios', 'horarios'])->get();
        return json_encode($citas);
    }
}
