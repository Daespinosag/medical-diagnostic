<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RolRequest;
use App\Entities\Role;
use App\Entities\Permission;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $role = Role::paginate(10);
        return view('crud.rol.index',compact('role'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permission = Permission::orderby('name','ASC')->pluck('display_name','id')->toArray();
        return view('crud.rol.create',compact('permission'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rol = Role::findOrFail($id);
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
        $role = Role::create($request->all());
        $role->permissions()->sync($request->all()['permission_role']);
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
        $rol = Role::with('permissions')->findOrFail($id);
        $permission = Permission::orderby('name','ASC')->pluck('display_name','id')->toArray();
        return view('crud.rol.edit',compact('rol'),compact('permission'));
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
        $role = Role::findOrFail($id);
        $role->fill($request->all());
        $role->save();
        $role->permissions()->sync($request->all()['permission_role']);
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
        $role = Role::findOrFail($id);
        $role->permissions()->detach();
        $role->users()->detech();
        Role::destroy($id);
        return redirect()->route('admin.rol.index');
    }
}
