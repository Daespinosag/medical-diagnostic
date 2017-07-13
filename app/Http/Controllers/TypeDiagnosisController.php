<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entities\TypeDiagnosis;
use App\Http\Requests\TypeDiagnosisRequest;

class TypeDiagnosisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typesDiagnosis = TypeDiagnosis::paginate(10);
        return view('crud.typeDiagnosis.index',compact('typesDiagnosis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.typeDiagnosis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param TypeDiagnosisRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(TypeDiagnosisRequest $request)
    {
        TypeDiagnosis::create($request->all());
        return redirect()->route('admin.typeDiagnosis.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $typeDiagnosis = TypeDiagnosis::findOrFail($id);
        return view('crud.typeDiagnosis.show',compact('typeDiagnosis'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $typeDiagnosis = TypeDiagnosis::findOrFail($id);
        return view('crud.typeDiagnosis.edit',compact('typeDiagnosis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param TypeDiagnosisRequest|Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(TypeDiagnosisRequest $request, $id)
    {
        $typeDiagnosis = TypeDiagnosis::findOrFail($id);
        $typeDiagnosis->fill($request->all());
        $typeDiagnosis->save();

        return redirect()->route('admin.typeDiagnosis.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TypeDiagnosis::destroy($id);
        return redirect()->route('admin.typeDiagnosis.index');
    }
}
