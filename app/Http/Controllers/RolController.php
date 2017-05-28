<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RolRequest;
use App\Entities\Rol;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $role = Rol::paginate(10);
        return view('crud.rol.index',compact('role'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.rol.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rol = Rol::findOrFail($id);
        return view('crud.rol.show',compact('rol'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param RolRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(RolRequest $request)
    {
        Rol::create($request->all());
        return redirect()->route('admin.rol.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $rol = Rol::findOrFail($id);
        return view('crud.rol.edit',compact('rol'));
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
        $rol = Rol::findOrFail($id);
        $rol->fill($request->all());
        $rol->save();

        return redirect()->route('admin.rol.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Rol::destroy($id);
        return redirect()->route('admin.rol.index');
    }
}
