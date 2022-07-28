<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class BarberosSeeder extends Seeder
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
                'servicio_id'       => 1,
                'nombres'           => 'Jose',
                'apellidos'         => 'López',
                'num_telefonico'    => '9191225809',
                'email'             => 'jose@gmail.com',
                'password'          => Hash::make(1234),
            ],
            [
                'servicio_id'       => 1,
                'nombres'           => 'Miguel',
                'apellido'          => 'López',
                'num_telefonico'    => '9191513420',
                'email'             => 'miguel@gmail.com',
                'password'          => Hash::make(1234),
            ],
            [
                'servicio_id'       => 2,
                'nombres'           => 'Pedro',
                'apellido'          => 'López',
                'num_telefonico'    => '9191379087',
                'email'             => 'pedro@gmail.com',
                'password'          => Hash::make(1234),
            ],
        ];
        DB::table('barberos')->insert($datos);
    }
}
