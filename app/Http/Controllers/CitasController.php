<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cita;
use App\Models\Servicio;
use Session;
use Stripe;

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
        if($data['tipo'] == 1){
            $data['cliente_id'] = Auth::user()->id;
            $data['estado'] = 'P';
            Cita::create($data);
            return json_encode(['icono' => 'icofont-ui-check', 'color' => 'text-success', 'titulo' => 'Felicidades!!!', 'mensaje' => 'Cita agendada correctanente']);
        }else{
            $servicio = Servicio::where('id', $data['servicio_id'])->first();
            Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
            $charge = \Stripe\Charge::create([
                "amount" => $servicio['precio_servicio'] * 100,
                "currency" => "mxn",
                "description" => "email: ".Auth::user()->email.", id_servicio: ".$servicio['tipo_servicio'],
                "source" => $request->stripeToken,  
            ]);
            if($charge->status = 'succeeded'){
                $data['cliente_id'] = Auth::user()->id;
                $data['estado'] = 'P';
                Cita::create($data);
                return json_encode(['icono' => 'icofont-ui-check', 'color' => 'text-success', 'titulo' => 'Felicidades!!!', 'mensaje' => 'Cita agendada correctanente']);
            }
        }
        
    }
    public function getCitas($filtro)
    {
        $citas = Cita::where([['estado', $filtro],['cliente_id', Auth::user()->id]])->with(['clientes', 'barberos', 'pagos', 'servicios', 'horarios'])->get();
        return json_encode($citas);
    }
    public function cancelar($id)
    {
        $cita = Cita::find($id);
        $cita->estado = 'C';
        $cita->update();
    }
    public function serviceCitas(Request $request)
    {
        if(Auth::user() != null)
        {
            $citasPend = Cita::where('estado', 'P')->orderBy('fecha')->get();
            return json_encode($citasPend);
        }
    }
    public function serviceGetCitas(Request $request)
    {
        $data = $request->all();
        $citas = Cita::where([['fecha', $data['fecha']], ['estado', $data['filtro']]])->with(['clientes', 'barberos', 'pagos', 'servicios', 'horarios'])->get();
        return json_encode(['datos' => $citas]);
    }
    public function serviceGetCitasByBarbero(Request $request)
    {
        $data = $request->all();
        $citas = Cita::where([['barbero_id', $data['barbero_id']], ['fecha', $data['fecha']], ['estado', $data['filtro']]])->with(['clientes', 'barberos', 'pagos', 'servicios', 'horarios'])->get();
        return json_encode(['datos' => $citas]);
    }
    public function serviceEditCita(Request $request)
    {
        $data = $request->all();
        $cita = Cita::find($data['id']);
        $cita->estado = $data['estado'];
        $cita->save();
        return json_encode(['datos' => 'Cita actualizada']);
    }
    public function addCitas(Request $request)
    {
        $request->validate([
            'barbero_id'        => 'required',
            'servicio_id'       => 'required',
            'horario_id'        => 'required',
            'fecha'             => 'required'
        ]);
        $data = $request->all();
        $datos = [
            'cliente_id' => 1,
            'barbero_id' => $data['barbero_id'],
            'pago_id' => 1,    
            'servicio_id' => $data['servicio_id'],
            'horario_id' => $data['horario_id'],
            'fecha' => $data['fecha'],
            'estado' => 'P',

        ];
        Cita::create($datos);
        return json_encode(['datos' => 'Cita agendada']);
        
    }
}
