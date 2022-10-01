<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class ClientesSeeder extends Seeder
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
                'nombres'           => 'Cliente',
                'apellidos'         => 'Genereal',
                'fecha_nac'         => '2000-01-01',
                'num_telefonico'    => '0000000000',
                'email'             => 'general@gmail.com',
                'password'          => Hash::make(1234),
            ],
            [
                'nombres'           => 'Jose',
                'apellidos'         => 'López',
                'fecha_nac'         => '2001-07-07',
                'num_telefonico'    => '9191225809',
                'email'             => 'jose@gmail.com',
                'password'          => Hash::make(1234),
            ],
            [
                'nombres'           => 'Miguel',
                'apellido'          => 'López',
                'fecha_nac'         => '2001-07-07',
                'num_telefonico'    => '9191513420',
                'email'             => 'miguel@gmail.com',
                'password'          => Hash::make(1234),
            ],
            [
                'nombres'           => 'Pedro',
                'apellido'          => 'López',
                'fecha_nac'         => '2001-07-07',
                'num_telefonico'    => '9191379087',
                'email'             => 'pedro@gmail.com',
                'password'          => Hash::make(1234),
            ],
        ];
        DB::table('clientes')->insert($datos);
    }
}
