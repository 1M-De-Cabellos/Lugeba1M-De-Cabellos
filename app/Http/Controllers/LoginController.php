<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email'         => 'required',
            'password'      => 'required',
        ]);
        $credenciales = $request->only('email', 'password');
        if(Auth::attempt($credenciales))
        {
            return json_encode(['icono' => 'icofont-ui-check', 'color' => 'text-success', 'titulo' => 'Felicidades!!!', 'mensaje' => 'Bienvenido']);
        }else{
            return json_encode(['icono' => 'icofont-ui-close', 'color' => 'text-danger', 'titulo' => 'Error!!!', 'mensaje' => 'Correo y/o contraseña incorrectas']);
        }
    }
}
