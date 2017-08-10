<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PatientLevelRequest;
use App\Entities\PatientLevel;
use App\Entities\Patient;
use App\Entities\Level;

class PatientLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patientLevels = PatientLevel::with(['level.diagnosis','patient'])->paginate(10);
        return view('crud.patientLevel.index',compact('patientLevels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $levels = Level::orderby('id','ASC')->pluck('name','id')->toArray();
        $patients = Patient::orderby('name','ASC')->pluck('name','id')->toArray();
        return view('crud.patientLevel.create',compact('levels'),compact('patients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param PatientLevelRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(PatientLevelRequest $request)
    {
        PatientLevel::create($request->all());
        return redirect()->route('admin.patientLevel.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $patientLevel = PatientLevel::with(['patient','level.diagnosis'])->findOrFail($id);
        return view('crud.patientLevel.show',compact('patientLevel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $patientLevel = PatientLevel::with(['patient','level'])->findOrFail($id);
        $levels = Level::orderby('id','ASC')->pluck('name','id')->toArray();
        $patients = Patient::orderby('name','ASC')->pluck('name','id')->toArray();
        return view('crud.patientLevel.edit')->with('patientLevel',$patientLevel)->with('levels',$levels)->with('patients',$patients);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param PatientLevelRequest|Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(PatientLevelRequest $request, $id)
    {
        $patientLevel = PatientLevel::findOrFail($id);
        $patientLevel->fill($request->all());
        $patientLevel->save();
        return redirect()->route('admin.patientLevel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PatientLevel::destroy($id);
        return redirect()->route('admin.patientLevel.index');
    }
}
