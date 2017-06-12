@extends('template.globalCard')


@section('headerCard')
    <div class="card-head">
        <header class="text-primary-dark">List Criterion</header>

        <div class="tools">
            <div class="btn-group">
                <a href="{{ route('admin.criterion.create') }}" type="button" class="btn btn-raised ink-reaction btn-primary btn-block" data-toggle="tooltip" data-original-title="New Criterion">New</a>
            </div>
        </div>
    </div>
@endsection

@section('bodyCard')

    <div id="role">
        <table class="table table-hover">
            <thead>
                <tr>
                    <td>Id</td>
                    <td>Formula</td>
                    <td>Variable</td>
                    <td>Value One</td>
                    <td>Value Two</td>
                    <td>Comparison Operator</td>
                    <td>Unit</td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody class="">
                @foreach($criteria as $criterion)
                    <tr class="">
                        <td>{{$criterion->id}}</td>
                        <td>{{$criterion->level->formula }}</td>
                        <td>{{$criterion->variable->name}}</td>
                        <td>{{$criterion->value_1}}</td>
                        <td>{{$criterion->value_2}}</td>
                        <td>{{$criterion->comparison_operator}}</td>
                        <td>{{$criterion->unit}}</td>
                        <td>
                            {{ Form::open(['route'=> ['admin.criterion.destroy', $criterion->id],'method'=> 'DELETE','onsubmit' => 'return confirm("are you sure ?")']) }}
                                <a href="{{ route('admin.criterion.show',$criterion->id) }}"  class="btn btn-icon-toggle"  data-toggle="tooltip" data-original-title="Show {{$criterion->id}}"><i class="fa fa-eye"></i></a>
                                <a href="{{ route('admin.criterion.edit',$criterion->id) }}"  class="btn btn-icon-toggle"  data-toggle="tooltip" data-original-title="Edit {{$criterion->id}}"><i class="fa fa-pencil"></i></a>
                                <button type="submit" class="btn btn-icon-toggle" data-toggle="tooltip" data-original-title="Delete {{$criterion->id}}"><i class="fa fa-trash-o"></i></button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
        {!! $criteria->render() !!}
    </div>
@endsection

@section('javascript')

@endsection
