<?php

namespace App\Http\Controllers;

use App\Entities\Variable;
use Illuminate\Http\Request;
use App\Http\Requests\CriterionRequest;
use App\Entities\Level;
use App\Entities\Criterion;


class CriterionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $criteria = Criterion::with(['level','variable'])->paginate(10);
        return view('crud.criterion.index',compact('criteria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $levels = Level::orderby('id','ASC')->pluck('name','id')->toArray();
        $variables = Variable::orderby('name','ASC')->pluck('name','id')->toArray();
        return view('crud.criterion.create',compact('levels'),compact('variables'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CriterionRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CriterionRequest $request)
    {
        $criterionCreated = Criterion::create($request->all());
        $criterionCreated->name = str_replace(' ','-',$criterionCreated->variable->name).'-'.$criterionCreated->id;
        $criterionCreated->save();
        return redirect()->route('admin.criterion.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $criterion = Criterion::with(['variable','level.diagnosis'])->findOrFail($id);
        return view('crud.criterion.show',compact('criterion'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $criterion = Criterion::with(['variable','level'])->findOrFail($id);
        $levels = Level::orderby('id','ASC')->pluck('formula','id')->toArray();
        $variables = Variable::orderby('name','ASC')->pluck('name','id')->toArray();
        return view('crud.criterion.edit')->with('criterion',$criterion)->with('levels',$levels)->with('variables',$variables);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CriterionRequest|Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(CriterionRequest $request, $id)
    {
        $criterion = Criterion::findOrFail($id);
        $criterion->fill($request->all());
        $criterion->save();
        return redirect()->route('admin.criterion.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Criterion::destroy($id);
        return redirect()->route('admin.criterion.index');
    }
}
