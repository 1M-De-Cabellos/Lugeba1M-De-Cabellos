<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;

class ServiciosController extends Controller
{
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
}
