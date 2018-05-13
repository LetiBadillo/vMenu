<?php

use Illuminate\Database\Seeder;

class PatientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = Carbon\Carbon::now();
        $array = [
            [
                'name'=> 'Blanca Leticia', 
                'last_name'=> 'Badillo Guzmán', 
                'email'=> 'letibadillog@hotmail.com', 
                'age'=> '23', 
                'bloodtype'=> '5', 
                'weight'=> '60', 
                'alergies'=> 'Ninguna', 
                'chronic'=> 'Ninguna', 
                'donate' => '1',
                'created_at' => $date
            ],
            [
                'name'=> 'Arón', 
                'last_name'=> 'Pérez Díaz', 
                'email'=> 'aron.pediaz@gmail.com', 
                'age'=> '24', 
                'bloodtype'=> '5', 
                'weight'=> '90', 
                'alergies'=> 'Ninguna', 
                'chronic'=> 'Ninguna', 
                'donate' => '1',
                'created_at' => $date
            ],
            [
                'name'=> 'Rommel Aghmed', 
                'last_name'=> 'Pacheco Marrufo', 
                'email'=> 'rommel@hotmail.com', 
                'age'=> '31', 
                'bloodtype'=> '5', 
                'weight'=> '80', 
                'alergies'=> 'Aspirina', 
                'chronic'=> 'Ninguna', 
                'donate' => '1',
                'created_at' => $date
            ],
            [
                'name'=> 'Manuél', 
                'last_name'=> 'López Osorio', 
                'email'=> 'manuel@hotmail.com', 
                'age'=> '24', 
                'bloodtype'=> '3', 
                'weight'=> '60', 
                'alergies'=> 'Ninguna', 
                'chronic'=> 'Bronquitis, Asma', 
                'donate' => '1',
                'created_at' => $date
            ]
        ];
        DB::table('patients')->insert($array);
    }
}

