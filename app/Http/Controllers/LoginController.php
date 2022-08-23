<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Notifications\Lugeba;
use App\Models\Cliente;

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
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
    public function forgotPassword(Request $request)
    {
        $user = Cliente::where('email', $request->all()['email'])->first();
        $password = Str::random(20);
        $user->password = Hash::make($password);
        $user->update();
        try{
            $user->notify(new Lugeba($password));//envia el correo de virifación al correo dado
            return json_encode(['icono' => 'icofont-ui-check', 'color' => 'text-success', 'titulo' => 'Felicidades!!!', 'mensaje' => 'La contraseña fue enviada al correo '.$request->all()['email']]);
        } catch(Exepcion $e){
            return json_encode(['icono' => 'icofont-error', 'color' => 'text-danger', 'titulo' => 'Error!!!', 'mensaje' => 'Ocurrio un error al enviar la contraseña']);

        }
    }
}
