<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Barbero;
use File;

class BarberosController extends Controller
{
    public function getBarbers($id)
    {
        $barberos = Barbero::where('servicio_id', $id)->with('servicios')->get();
        return json_encode($barberos);
    }
    public function getBarberPhoto($id)
    {
        $barbero = Barbero::where('id', $id)->get();
        return json_encode($barbero);
    }
    //seervicios
    public function serviceBarberos(Request $request)
    {
        if(Auth::user() != null)
        {
            $barberos = Barbero::all();
            return json_encode(['datos' => $barberos]);
        }
    }
    public function serviceAddBarberos(Request $request)
    {
        if(Auth::user() != null)
        {
            $data = $request->all();
            if(Barbero::where('email', $data['email'])->exists()){
                return json_encode(['datos' => 'Correo existente']);
            }else{
                $imagen = str_replace('data:image/png;base64,', '', $data['foto']);
                $imagen = str_replace(' ', '+', $imagen);
                $imgName = date('YmdHis').'.png';
                \File::put(public_path('img/'.$imgName), base64_decode($imagen));
                $data['foto'] = $imgName;
                $data['password'] = Hash::make($data['password']);
                $barberos = Barbero::create($data);
                return json_encode(['datos' => 'Barbero registrado']);
            }
        }
    }
    public function serviceEditBarbero(Request $request)
    {
        if(Auth::user() != null)
        {
            $data = $request->all();
            $barbero = Barbero::find($data['id']);
            $barbero->update($data);
            return json_encode(['datos' => 'Barbero actualizado']);
        }
    }
    public function serviceEditProfile(Request $request)
    {
        $data = $request->all();
        $barbero = Barbero::where('email', $data['email'])->first();
        $barbero->nombres = $data['nombres'];
        $barbero->apellidos = $data['apellidos'];
        $barbero->num_telefonico = $data['num_telefonico'];
        $barbero->email = $data['email'];
        $barbero->save();
        return json_encode(['datos' => 'Datos actualizados']);
    }
    public function serviceCambiarPass(Request $request)
    {
        $data = $request->all();
        $barbero = Barbero::where('email', $data['email'])->first();
        $barbero->password = Hash::make($data['password']);
        $barbero->save();
        return json_encode(['datos' => 'Contraseña actualizada']);
    }
    public function serviceCambiarFoto(Request $request)
    {
        $data = $request->all();
        $barbero = Barbero::where('email', $data['email'])->first();
        $image_path = public_path("img/".$barbero->foto);
        File::delete($image_path);
        $imagen = str_replace('data:image/png;base64,', '', $data['foto']);
        $imagen = str_replace(' ', '+', $imagen);
        $imgName = date('YmdHis').'.png';
        \File::put(public_path('img/'.$imgName), base64_decode($imagen));
        $barbero->foto = $imgName;
        $barbero->save();
        return json_encode(['datos' => 'Foto actualizada', 'foto' => $imgName]);
    }
}
