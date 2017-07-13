<?php

namespace App\Http\Controllers;

use App\Entities\TypeDiagnosis;
use Illuminate\Http\Request;
use App\Entities\Diagnosis;
use App\Http\Requests\DiagnosisRequest;

class DiagnosisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diagnostics = Diagnosis::with('typeDiagnosis')->orderby('name')->paginate(10);

        return view('crud.diagnosis.index',compact('diagnostics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $typesDiagnostics = TypeDiagnosis::orderby('name','ASC')->pluck('name','id')->toArray();
        return view('crud.diagnosis.create',compact('typesDiagnostics'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param DiagnosisRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(DiagnosisRequest $request)
    {
        Diagnosis::create($request->all());
        return redirect()->route('admin.diagnosis.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $diagnosis = Diagnosis::findOrFail($id);
        return view('crud.diagnosis.show',compact('diagnosis'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $diagnosis = Diagnosis::findOrFail($id);
        $typesDiagnostics = TypeDiagnosis::orderby('name','ASC')->pluck('name','id')->toArray();
        return view('crud.diagnosis.edit',compact('diagnosis'),compact('typesDiagnostics'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param DiagnosisRequest|Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(DiagnosisRequest $request, $id)
    {
        $diagnosis = Diagnosis::findOrFail($id);
        $diagnosis->fill($request->all());
        $diagnosis->save();

        return redirect()->route('admin.diagnosis.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Diagnosis::destroy($id);
        return redirect()->route('admin.diagnosis.index');
    }
}
