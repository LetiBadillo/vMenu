<?php

namespace App\Http\Controllers;
use App\Models\Consultation;
use App\Models\Patient;
use App\Http\Requests\StoreConsultationRequest;

use Illuminate\Http\Request;

class ConsultationsController extends Controller
{
    public function index(Request $request){
        $consultations = Consultation::all();
        return view('consultations.index', compact('consultations'));
    }
    public function create(Request $request){
        if($request->patient){
            $patient = Patient::findOrFail($request->patient);
            return view('consultations.create', compact('patient'));    
        }
        return view('consultations.create');
    }

    public function store(StoreConsultationRequest $request){
        $consultation = Consultation::create($request->all());
        return $consultation->id;
    }

    public function edit(Request $request, $id){
        $consultation = Consultation::findOrFail($id);
        return view('consultations.edit', compact('consultation'));
    }
    public function update(StoreConsultationRequest $request, $id){
        $consultation = Consultation::findOrFail($id)->update($request->all());
        return redirect('consultations');
    }
    public function show($id){
        $consultation = Consultation::findOrFail($id);
        return view('consultations.show', compact('consultation'));
    }
    public function destroy($id){
        $consultation = Consultation::findOrFail($id)->delete();
        return \Redirect::back();
    }
}
