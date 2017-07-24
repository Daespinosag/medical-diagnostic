<?php

namespace App\Http\Controllers;
use App\Entities\TypeDiagnosis;
use App\Entities\Diagnosis;
use App\Http\Requests\DiagnosisRequest;
use App\Http\Requests\TypeDiagnosisRequest;
use Illuminate\Http\Request;

class ProcessLevelController extends Controller
{
    public function index()
    {
        return view('processLevel.index');
    }

    public function getTypeDiagnosis()
    {
        return TypeDiagnosis::orderby('name','ASC')->get(['name','id'])->toArray();
    }

    public function createTypeDiagnosis(TypeDiagnosisRequest $request)
    {
        return TypeDiagnosis::create($request->all());
    }

    public function loadDiagnosis(Request $request)
    {
        return Diagnosis::orderby('name','ASC')->where('type_diagnosis_id',$request->all()['id'])->get(['name','id'])->toArray();
    }

    public function createDiagnosis(DiagnosisRequest $request)
    {
        return Diagnosis::create($request->all());
    }
}
