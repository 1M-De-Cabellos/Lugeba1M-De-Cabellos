<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barbero;

class BarberosController extends Controller
{
    public function getBarbers($id)
    {
        $barberos = Barbero::where('servicio_id', $id)->with('servicios')->get();
        return json_encode($barberos);
    }
}
