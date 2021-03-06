<?php

namespace App\Http\Controllers;

use App\Entities\Criterion;
use App\Entities\Diagnosis;
use Illuminate\Http\Request;
use App\Entities\Level;
use App\Http\Requests\LevelRequest;

class LevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $levels = Level::with('diagnosis')->paginate(10);
        return view('crud.level.index',compact('levels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $diagnosis = Diagnosis::orderby('name','ASC')->pluck('name','id')->toArray();
        return view('crud.level.create',compact('diagnosis'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param LevelRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(LevelRequest $request)
    {
        $levelCreated = Level::create($request->all());
        $levelCreated->name = str_replace(' ','-',$levelCreated->diagnosis->name).'-'.$levelCreated->id;
        $levelCreated->save();
        return redirect()->route('admin.level.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $level = Level::findOrFail($id);
        return view('crud.level.show',compact('level'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $level = Level::with('diagnosis','variables')->findOrFail($id);
        $diagnosis = Diagnosis::orderby('name','ASC')->pluck('name','id')->toArray();
        $criterionList = (object)Criterion::where('level_id', $id)->get()->toArray();
        $level = (object)$level->toArray();
        return view('crud.level.edit',compact('level'),compact('criterionList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param LevelRequest|Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(LevelRequest $request, $id)
    {
        $level = Level::findOrFail($id);
        $level->fill($request->all());
        $level->save();
        return redirect()->route('admin.level.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $level = Level::findOrFail($id);
        $level->variables()->detach();
        $level->patients()->detach();
        Level::destroy($id);
        return redirect()->route('admin.level.index');
    }
}
