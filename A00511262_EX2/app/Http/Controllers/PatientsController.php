<?php

namespace App\Http\Controllers;
use App\Models\Patient;
use App\Http\Requests\StorePatientRequest;

use Illuminate\Http\Request;

class PatientsController extends Controller
{
    public function index(Request $request){
        $patients = Patient::all();
        if($request->ws == "all"){
            return $patients;
        }
            return view('patients.index', compact('patients'));
        
    }
    public function create(){
        return view('patients.create');
    }

    public function store(StorePatientRequest $request){
        $patient = Patient::create($request->all());
        return $patient->id;
    }

    public function edit(Request $request, $id){
        $patient = Patient::findOrFail($id);
        return view('patients.edit', compact('patient'));
    }
    public function update(StorePatientRequest $request, $id){
        $patient = Patient::findOrFail($id)->update($request->all());
        if($patient){
            return "Cambios guardados correctamente";
        }
    }
    public function show(Request $request, $id){
        $patient = Patient::findOrFail($id);
        if($request->ws=="getInfo"){
            return $patient;
        }
        return view('patients.show', compact('patient'));
    }
    public function destroy($id){
        $patient = Patient::findOrFail($id);
        foreach($patient->consultation as $consultation){
            $consultation->delete();
        }
        $patient->delete();
        return redirect('patients');
    }
}
