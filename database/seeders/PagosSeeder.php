<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PagosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos = [
            [
                'tipo_pago' => 'Efectivo en sucursal'
            ],
            [
                'tipo_pago' => 'Con targeta'
            ],
        ];
        DB::table('pagos')->insert($datos);
    }
}
