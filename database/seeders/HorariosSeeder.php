<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HorariosSeeder extends Seeder
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
                'dia'       => 'Lunes',                     
                'horario'   => '9:00 AM - 10:00 AM',
            ],
            [
                'dia'       => 'Lunes',                     
                'horario'   => '11:00 AM - 12:00 PM',
            ],
            [
                'dia'       => 'Lunes',                     
                'horario'   => '12:00 PM - 13:00 PM',
            ],
            [
                'dia'       => 'Lunes',                     
                'horario'   => '13:00 PM - 14:00 PM',
            ],
            [
                'dia'       => 'Lunes',                     
                'horario'   => '14:00 PM - 15:00 PM',
            ],
            [
                'dia'       => 'Lunes',                     
                'horario'   => '15:00 PM - 16:00 PM',
            ],
            [
                'dia'       => 'Martes',                     
                'horario'   => '9:00 AM - 10:00 AM',
            ],
            [
                'dia'       => 'Martes',                     
                'horario'   => '11:00 AM - 12:00 PM',
            ],
            [
                'dia'       => 'Martes',                     
                'horario'   => '12:00 PM - 13:00 PM',
            ],
            [
                'dia'       => 'Martes',                     
                'horario'   => '13:00 PM - 14:00 PM',
            ],
            [
                'dia'       => 'Martes',                     
                'horario'   => '14:00 PM - 15:00 PM',
            ],
            [
                'dia'       => 'Martes',                     
                'horario'   => '15:00 PM - 16:00 PM',
            ],
            [
                'dia'       => 'Miercoles',                     
                'horario'   => '9:00 AM - 10:00 AM',
            ],
            [
                'dia'       => 'Miercoles',                     
                'horario'   => '11:00 AM - 12:00 PM',
            ],
            [
                'dia'       => 'Miercoles',                     
                'horario'   => '12:00 PM - 13:00 PM',
            ],
            [
                'dia'       => 'Miercoles',                     
                'horario'   => '13:00 PM - 14:00 PM',
            ],
            [
                'dia'       => 'Miercoles',                     
                'horario'   => '14:00 PM - 15:00 PM',
            ],
            [
                'dia'       => 'Miercoles',                     
                'horario'   => '15:00 PM - 16:00 PM',
            ],
            [
                'dia'       => 'Jueves',                     
                'horario'   => '9:00 AM - 10:00 AM',
            ],
            [
                'dia'       => 'Jueves',                     
                'horario'   => '11:00 AM - 12:00 PM',
            ],
            [
                'dia'       => 'Jueves',                     
                'horario'   => '12:00 PM - 13:00 PM',
            ],
            [
                'dia'       => 'Jueves',                     
                'horario'   => '13:00 PM - 14:00 PM',
            ],
            [
                'dia'       => 'Jueves',                     
                'horario'   => '14:00 PM - 15:00 PM',
            ],
            [
                'dia'       => 'Jueves',                     
                'horario'   => '15:00 PM - 16:00 PM',
            ],
            [
                'dia'       => 'Viernes',                     
                'horario'   => '9:00 AM - 10:00 AM',
            ],
            [
                'dia'       => 'Viernes',                     
                'horario'   => '11:00 AM - 12:00 PM',
            ],
            [
                'dia'       => 'Viernes',                     
                'horario'   => '12:00 PM - 13:00 PM',
            ],
            [
                'dia'       => 'Viernes',                     
                'horario'   => '13:00 PM - 14:00 PM',
            ],
            [
                'dia'       => 'Viernes',                     
                'horario'   => '14:00 PM - 15:00 PM',
            ],
            [
                'dia'       => 'Viernes',                     
                'horario'   => '15:00 PM - 16:00 PM',
            ],
            [
                'dia'       => 'Sabado',                     
                'horario'   => '9:00 AM - 10:00 AM',
            ],
            [
                'dia'       => 'Sabado',                     
                'horario'   => '11:00 AM - 12:00 PM',
            ],
            [
                'dia'       => 'Sabado',                     
                'horario'   => '12:00 PM - 13:00 PM',
            ],
            [
                'dia'       => 'Sabado',                     
                'horario'   => '13:00 PM - 14:00 PM',
            ],
            [
                'dia'       => 'Sabado',                     
                'horario'   => '14:00 PM - 15:00 PM',
            ],
            [
                'dia'       => 'Sabado',                     
                'horario'   => '15:00 PM - 16:00 PM',
            ],
            [
                'dia'       => 'Domingo',                     
                'horario'   => '9:00 AM - 10:00 AM',
            ],
            [
                'dia'       => 'Domingo',                     
                'horario'   => '11:00 AM - 12:00 PM',
            ],
            [
                'dia'       => 'Domingo',                     
                'horario'   => '12:00 PM - 13:00 PM',
            ],
            [
                'dia'       => 'Domingo',                     
                'horario'   => '13:00 PM - 14:00 PM',
            ],
            [
                'dia'       => 'Domingo',                     
                'horario'   => '14:00 PM - 15:00 PM',
            ],
            [
                'dia'       => 'Domingo',                     
                'horario'   => '15:00 PM - 16:00 PM',
            ],

        ];
        DB::table('horarios')->insert($datos);
    }
}
