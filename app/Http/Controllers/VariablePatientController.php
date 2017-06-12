<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Entities\Variable;
use App\Entities\Patient;
use App\Entities\VariablePatient;
use App\Http\Requests\VariablePatientRequest;
use Illuminate\Support\Facades\Auth;


class VariablePatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $variablePatients = VariablePatient::with(['variable','patient','user'])->paginate(10);
        return view('crud.variablePatient.index',compact('variablePatients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $variables = Variable::orderby('name','ASC')->pluck('name','id')->toArray();
        $patients = Patient::orderby('name','ASC')->pluck('name','id')->toArray();
        return view('crud.variablePatient.create',compact('variables'),compact('patients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param VariablePatientRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(VariablePatientRequest $request)
    {
        $variablePatient = $request->all();
        $variablePatient['user_id'] = 1; // cambiar con el autenticado
        VariablePatient::create($variablePatient);
        return redirect()->route('admin.variablePatient.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $variablePatient = VariablePatient::with(['variable','user','patient'])->findOrFail($id);
        return view('crud.variablePatient.show',compact('variablePatient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $variablePatient = VariablePatient::with(['variable','user','patient'])->findOrFail($id);
        $variables = Variable::orderby('name','ASC')->pluck('name','id')->toArray();
        $patients = Patient::orderby('name','ASC')->pluck('name','id')->toArray();
        return view('crud.variablePatient.edit')->with('variablePatient',$variablePatient)->with('patients',$patients)->with('variables',$variables);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param VariablePatientRequest|Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(VariablePatientRequest $request, $id)
    {
        $variablePatient = VariablePatient::findOrFail($id);
        $variablePatient->fill($request->all());
        $variablePatient->save();
        return redirect()->route('admin.variablePatient.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        VariablePatient::destroy($id);
        return redirect()->route('admin.variablePatient.index');
    }
}
