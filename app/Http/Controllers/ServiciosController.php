<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Servicio;

class ServiciosController extends Controller
{
    public function store(Request $request)
    {
        if(Auth::user() != null)
        {
            $data = $request->all();
            Servicio::create($data);
            return json_encode(['datos' => 'Servicio registrado']);
        }

    }
    public function getServices()
    {
        $servicios = Servicio::all();
        return json_encode($servicios);
    }
    public function getServicesPrice($id)
    {
        $servicios = Servicio::where('id', $id)->get();
        return json_encode($servicios);
    }
    public function serviceServicios(Request $request)
    {
        if(Auth::user() != null)
        {
            $servicios = Servicio::all();
            return json_encode(['datos' => $servicios]);
        }
    }
    public function serviceEditBarbero(Request $request)
    {
        if(Auth::user() != null)
        {
            $data = $request->all();
            $servicio = Servicio::find($data['id']);
            $servicio->update($data);
            return json_encode(['datos' => 'Servicio actualizado']);
        }
    }
}
