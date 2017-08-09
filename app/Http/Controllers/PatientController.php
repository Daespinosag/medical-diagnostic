<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entities\Patient;
use App\Http\Requests\PatientRequest;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::paginate(10);
        return view('crud.patient.index',compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.patient.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param PatientRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(PatientRequest $request)
    {
        Patient::create($request->all());
        return redirect()->route('admin.patient.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $patient = Patient::findOrFail($id);
        return view('crud.patient.show',compact('patient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patient = Patient::findOrFail($id);
        return view('crud.patient.edit',compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param PatientRequest|Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(PatientRequest $request, $id)
    {
        $patient = Patient::findOrFail($id);
        $patient->fill($request->all());
        $patient->save();

        return redirect()->route('admin.patient.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patient = Patient::findOrFail($id);
        $patient->levels()->detach();
        $patient->users()->detach();
        $patient->variables()->detach();
        Patient::destroy($id);
        return redirect()->route('admin.patient.index');
    }
}
