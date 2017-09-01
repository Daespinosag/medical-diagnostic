<?php

namespace App\Http\Controllers;

use App\Entities\Patient;
use App\Entities\PatientLevel;
use Illuminate\Http\Request;

class ConsultPatientController extends Controller
{
    public function index(){
        return view('public.consultPatient');
    }

    public function getDiagnostics(Request $request)
    {
        $patient = Patient::where('identification_card',$request['identification_card'])->first();
        $error =[];
        $arr = [];
        if ($patient !== null){
            $cases = PatientLevel::select('medical_case as val')->where('patient_id',$patient->id)->distinct('medical_case')->get()->toArray();
            foreach ($cases as $caseKey => $caseValue){
                $arr[$caseValue['val']] = [];
                foreach ($patient->levels as $level){
                    if ($caseValue['val'] == $level->pivot->medical_case){
                        array_push( $arr[$caseValue['val']], [
                            'date' => $level->pivot->diagnosis_date,
                            'diagnosis_name' => $level->diagnosis->name,
                            'response'  => $level->response
                        ]);
                    }
                }
            }

            if (empty($arr)){array_push($error,'El Paciente '.$request['identification_card'].' no tiene diagnósticos asignados');}
        }else{
            array_push($error,'No Se Encontró el pasiente con documento de identidad numero: '.$request['identification_card']);
        }

        return ['patient'=>$patient,'diagnostics'=>$arr,'errors'=>$error];
    }
}
