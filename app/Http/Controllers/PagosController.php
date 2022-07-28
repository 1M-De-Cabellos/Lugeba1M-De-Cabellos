<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pago;

class PagosController extends Controller
{
    public function getPayments()
    {
        $pagos = Pago::all();
        return json_encode($pagos);
    }
}
