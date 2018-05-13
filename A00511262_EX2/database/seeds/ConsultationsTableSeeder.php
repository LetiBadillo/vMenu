<?php

use Illuminate\Database\Seeder;

class ConsultationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $patients = App\Models\Patient::all();
        $array = array();
        $date = Carbon\Carbon::now();
        $description = ['El paciente presenta dolor en ambas rodillas', 'El paciente presenta fatiga', 'Chequeo de rutina antes de las olimpiadas', 'El paciente presenta mejoría a tratamiento de asma'];
        $diagnosed = ['Hiperextensión patelar lateral en ambas rodillas. Necesita una artroscopía en ambas rodillas.', 'Se le recomiendan vacaciones en México', 'Todo bien', 'Se le seguirá administrando el mismo tratamiento.'];
        
        foreach($patients as $key => $patient){
            array_push($array, 
            [
                'patient_id' => $patient->id, 
                'description' => $description[$key], 
                'diagnosed' => $diagnosed[$key], 
                'next_date' => $date->addWeek(),
                'created_at' => $date
            ]);
        }
        DB::table('consultations')->insert($array);
    }
}
