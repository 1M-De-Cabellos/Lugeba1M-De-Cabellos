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
                'nombres'           => 'Admin',
                'apellidos'         => 'Admin',
                'num_telefonico'    => '000000000',
                'email'             => 'admin@gmail.com',
                'password'          => Hash::make(1234),
                'foto'              => 'broli.jpg',
                'esAdmin'           => true,
            ],
            [
                'servicio_id'       => 2,
                'nombres'           => 'Gerardo',
                'apellidos'         => 'Admin',
                'num_telefonico'    => '919000000',
                'email'             => 'gerardo@gmail.com',
                'password'          => Hash::make(1234),
                'foto'              => 'broli.jpg',
                'esAdmin'           => true,
            ],
            [
                'servicio_id'       => 3,
                'nombres'           => 'roberto',
                'apellido'          => 'López',
                'num_telefonico'    => '9191379087',
                'email'             => 'pedro@gmail.com',
                'password'          => Hash::make(1234),
                'foto'              => 'vegueta.png',
                'esAdmin'           => false,

            ],
        ];
        DB::table('barberos')->insert($datos);
    }
}
