<?php

namespace App\Http\Controllers;
use App\Entities\Criterion;
use App\Entities\Level;
use App\Entities\TypeDiagnosis;
use App\Entities\Diagnosis;
use App\Entities\Variable;
use App\Http\Requests\CriterionRequest;
use App\Http\Requests\DiagnosisRequest;
use App\Http\Requests\LevelRequest;
use App\Http\Requests\TypeDiagnosisRequest;
use Illuminate\Http\Request;

class ProcessLevelController extends Controller
{
    public function index()
    {
        return view('processLevel.index');
    }

    public function redirectIndex()
    {
        return ['redirect' => url('admin/level')];
    }

    /* inicio de funcionalidades para step-one*/

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

    /* fin de funcionalidades para step-one*/

    public function createLevel(LevelRequest $request)
    {
        $val = $request->all()['diagnosis_id'];
        $diagnosisName = Diagnosis::find($val)->name;
        $levelCreated = new Level;
        $levelCreated->diagnosis_id = $val;
        $level = Level::create($levelCreated->toArray());
        $level->name = str_replace(' ','-',$diagnosisName).'-'.$level->id;
        $level->save();

        return $level;
    }

    public function getVariables()
    {
        return Variable::orderby('name','ASC')->get(['name','id'])->toArray();
    }

    public function getListCriterion(Request $request)
    {
        return Criterion::where('variable_id',$request->all()['variable_id'])->get(['name','id'])->toArray();
    }

    public function getCriterion(Request $request)
    {
        return Criterion::where('id',$request->all()['id'])->get()->toArray();
    }

    public function saveCriterion(CriterionRequest $request)
    {
       $criterion = Criterion::create($request->all());
       $criterion->name = str_replace(' ','-',$criterion->variable->name).'-'.$criterion->id;
       $criterion->save();
       return $criterion;
    }

    public function deleteCriterion(Request $request)
    {
         return Criterion::destroy($request->all()['id']);
    }

    public function updateLevel(LevelRequest $request)
    {
        $level = Level::findOrFail($request->all()['id']);
        $level->fill($request->all());
        $level->save();
        return redirect()->route('admin.level.index');
    }

    public function deleteLevel(Request $request)
    {
        $level = Level::find($request->all()['level_id']);
        $level->variables()->detach();
        Level::destroy($request->all()['level_id']);
        return;
    }
}
