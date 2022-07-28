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
                'domingo'   => '9:00 AM - 10:00 AM',
                'lunes'     => '9:00 AM - 10:00 AM',
                'martes'    => '9:00 AM - 10:00 AM',
                'miercoles' => '9:00 AM - 10:00 AM',
                'jueves'    => '9:00 AM - 10:00 AM',
                'viernes'   => '9:00 AM - 10:00 AM',
                'sabado'    => '9:00 AM - 10:00 AM',
            ],
            [
                'domingo'   => '10:00 AM - 11:00 AM',
                'lunes'     => '10:00 AM - 11:00 AM',
                'martes'    => '10:00 AM - 11:00 AM',
                'miercoles' => '10:00 AM - 11:00 AM',
                'jueves'    => '10:00 AM - 11:00 AM',
                'viernes'   => '10:00 AM - 11:00 AM',
                'sabado'    => '10:00 AM - 11:00 AM',
            ],
            [
                'domingo'   => '11:00 AM - 12:00 PM',
                'lunes'     => '11:00 AM - 12:00 PM',
                'martes'    => '11:00 AM - 12:00 PM',
                'miercoles' => '11:00 AM - 12:00 PM',
                'jueves'    => '11:00 AM - 12:00 PM',
                'viernes'   => '11:00 AM - 12:00 PM',
                'sabado'    => '11:00 AM - 12:00 PM',
            ],
            [
                'domingo'   => '12:00 PM - 13:00 PM',
                'lunes'     => '12:00 PM - 13:00 PM',
                'martes'    => '12:00 PM - 13:00 PM',
                'miercoles' => '12:00 PM - 13:00 PM',
                'jueves'    => '12:00 PM - 13:00 PM',
                'viernes'   => '12:00 PM - 13:00 PM',
                'sabado'    => '12:00 PM - 13:00 PM',
            ],
            [
                'domingo'   => '13:00 PM - 14:00 PM',
                'lunes'     => '13:00 PM - 14:00 PM',
                'martes'    => '13:00 PM - 14:00 PM',
                'miercoles' => '13:00 PM - 14:00 PM',
                'jueves'    => '13:00 PM - 14:00 PM',
                'viernes'   => '13:00 PM - 14:00 PM',
                'sabado'    => '13:00 PM - 14:00 PM',
            ],
            [
                'sabado'    => '14:00 PM - 15:00 PM',
                'domingo'   => null,
                'lunes'     => '14:00 PM - 15:00 PM',
                'martes'    => '14:00 PM - 15:00 PM',
                'miercoles' => '14:00 PM - 15:00 PM',
                'jueves'    => '14:00 PM - 15:00 PM',
                'viernes'   => '14:00 PM - 15:00 PM',
            ],
            [
                'domingo'   => null,
                'lunes'     => '15:00 PM - 16:00 PM',
                'martes'    => '15:00 PM - 16:00 PM',
                'miercoles' => '15:00 PM - 16:00 PM',
                'jueves'    => '15:00 PM - 16:00 PM',
                'viernes'   => '15:00 PM - 16:00 PM',
                'sabado'    => '15:00 PM - 16:00 PM',
            ],
            [
                'domingo'   => null,
                'lunes'     => '16:00 PM - 17:00 PM',
                'martes'    => '16:00 PM - 17:00 PM',
                'miercoles' => '16:00 PM - 17:00 PM',
                'jueves'    => '16:00 PM - 17:00 PM',
                'viernes'   => '16:00 PM - 17:00 PM',
                'sabado'    => null,
            ],
            [
                'domingo'   => null,
                'lunes'     => '17:00 PM - 18:00 PM',
                'martes'    => '17:00 PM - 18:00 PM',
                'miercoles' => '17:00 PM - 18:00 PM',
                'jueves'    => '17:00 PM - 18:00 PM',
                'viernes'   => '17:00 PM - 18:00 PM',
                'sabado'    => null,
            ],
            [
                'domingo'   => null,
                'lunes'     => '18:00 PM - 19:00 PM',
                'martes'    => '18:00 PM - 19:00 PM',
                'miercoles' => '18:00 PM - 19:00 PM',
                'jueves'    => '18:00 PM - 19:00 PM',
                'viernes'   => '18:00 PM - 19:00 PM',
                'sabado'    => null,
            ],
        ];
        DB::table('horarios')->insert($datos);
    }
}
