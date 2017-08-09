<?php

namespace App\Http\Controllers;

use App\Entities\Variable;
use App\Http\Requests\VariableRequest;
use Illuminate\Http\Request;

class VariableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $variables = Variable::paginate(10);
        return view('crud.variable.index',compact('variables'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.variable.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param VariableRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(VariableRequest $request)
    {
        //dd($request->all());
        Variable::create($request->all());
        return redirect()->route('admin.variable.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $variable = Variable::findOrFail($id);
        return view('crud.variable.show',compact('variable'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $variable = Variable::findOrFail($id);
        return view('crud.variable.edit',compact('variable'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $variable = Variable::findOrFail($id);
        $variable->fill($request->all());
        $variable->save();
        return redirect()->route('admin.variable.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $variable = Variable::findOrFail($id);
        $variable->levels()->detach();
        $variable->patients()->detach();
        $variable->users()->detach();
        Variable::destroy($id);
        return redirect()->route('admin.variable.index');
    }
}
