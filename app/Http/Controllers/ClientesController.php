<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Cliente;

class ClientesController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nombres'           => 'required',
            'apellidos'         => 'required',
            'fecha_nac'         => 'required',
            'num_telefonico'    => 'required',
            'email'             => 'required',
            'password'          => 'required',
        ]);
        $datos = $request->all();
        if(Cliente::where('num_telefonico', $datos['num_telefonico'])->exists())
        {
            return json_encode(['icono' => 'icofont-warning-alt', 'color' => 'text-warning', 'titulo' => 'Ops!!!', 'mensaje' => 'El numero de télefono ya existe']);
        }
        elseif(Cliente::where('email', $datos['email'])->exists())
        {
            return json_encode(['icono' => 'icofont-warning-alt', 'color' => 'text-warning', 'titulo' => 'Ops!!!', 'mensaje' => 'El correo ya existe']);
        }
        $datos['password'] = Hash::make($datos['password']);
        Cliente::create($datos);
        return json_encode(['icono' => 'icofont-ui-check', 'color' => 'text-success', 'titulo' => 'Felicidades!!!', 'mensaje' => 'Cuenta creada correctamente']);
    }
}
