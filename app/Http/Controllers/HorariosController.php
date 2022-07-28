<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Horario;
use Illuminate\Support\Facades\DB;

class HorariosController extends Controller
{
    public function getSchedules($id, $id2, $dia)
    {
        $sql = "SELECT id, horarios.{$dia} FROM horarios WHERE NOT exists (SELECT citas.id FROM citas WHERE citas.horario_id = horarios.id AND citas.barbero_id = {$id2}  AND citas.fecha = '{$id}' AND citas.estado = 'P') ";
        $horarios = DB::select($sql);
        return json_encode($horarios);
    }
}
