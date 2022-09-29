<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Horario;
use Illuminate\Support\Facades\DB;

class HorariosController extends Controller
{
    public function getSchedules($id, $id2, $dia)
    {
        $sql = "SELECT id, dia, horario FROM horarios WHERE NOT exists (SELECT citas.id FROM citas WHERE citas.horario_id = horarios.id AND citas.barbero_id = {$id2}  AND citas.fecha = '{$id}' AND citas.estado = 'P') AND horarios.dia = '{$dia}' ";
        $horarios = DB::select($sql);
        return json_encode($horarios);
    }
    public function store(Request $request)
    {
    	$data = $request->all();
    	$inicio = $data['apertura'];
    	$fin = $data['cierre'];
    	$prefijo = 'AM';
    	for ($i=$inicio; $i < $fin ; $i++) { 
    		if($i > 11){
    			$prefijo = 'PM';
    		}
    		$horario =  $i.':00 '.$prefijo.' - '.($i+1).':00 '.$prefijo;
    		$datos = [
    			'dia'		=> $data['dia'],
    			'horario'	=> $horario
    		];
    		Horario::create($datos);
    	}
    	return json_encode(['datos' => 'Horario registrado']);
    }
    public function serviceHorarios(Request $request)
    {
    	$horarios = Horario::all();
    	return json_encode(['datos' => $horarios]);
    }
    public function serviceEditHorario(Request $request)
    {
        $data = $request->all();
        $horario = Horario::find($data['id']);
        $horario->update($data);
        return json_encode(['datos' => 'Horario actualizado']);
    }
}
