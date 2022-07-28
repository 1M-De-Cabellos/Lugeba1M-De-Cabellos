<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiciosSeeder extends Seeder
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
                'tipo_servicio'     => 'Corte de cabello',
                'Duracion'          => '20 Min',
                'precio_servicio'   => 100
            ],
            [
                'tipo_servicio'     => 'Corte de barba',
                'Duracion'          => '10 Min',
                'precio_servicio'   => 75
            ],
            [
                'tipo_servicio'     => 'Planchado de cabello',
                'Duracion'          => '25 Min',
                'precio_servicio'   => 80
            ],
            [
                'tipo_servicio'     => 'Decoloración de cabello',
                'Duracion'          => '45 Min',
                'precio_servicio'   => 100
            ],
        ];
        DB::table('servicios')->insert($datos);
    }
}
