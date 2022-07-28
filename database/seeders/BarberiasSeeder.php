<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarberiasSeeder extends Seeder
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
                'nombre'        => 'Barber Shop',
                'domingo'       => '9-2',
                'lunes'         => '9-7',
                'martes'        => '9-7',
                'miercoles'     => '9-7',
                'jueves'        => '9-7',
                'viernes'       => '9-7',
                'sabado'        => '9-4',
                'estado'        => 'México',
                'municipio'     => 'Delagacion Iztapalapa',
                'cp'            => 30039,
                'colonia'       => 'Los pinos',
                'calle'         => 'Calle privada Malibú',
                'n_casa'        => '2123',
                'coordenadas'   => '19.330762873788704,-99.06145098703601',
            ],
        ];
        DB::table('barberias')->insert($datos);
    }
}
