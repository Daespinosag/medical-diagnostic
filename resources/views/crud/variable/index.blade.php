@extends('template.globalCard')


@section('headerCard')
    <div class="card-head">
        <header class="text-primary-dark">List Variables</header>

        <div class="tools">
            <div class="btn-group">
                <a href="{{ route('admin.variable.create') }}" type="button" class="btn btn-raised ink-reaction btn-primary btn-block" data-toggle="tooltip" data-original-title="New Variable">New</a>
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
                    <td>Name</td>
                    <td>Json Name</td>
                    <td>Calculated</td>
                    <td>Calculation Operation</td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody class="">
                @foreach($variables as $variable)
                    <tr class="">
                        <td>{{$variable->id}}</td>
                        <td>{{$variable->name }}</td>
                        <td>{{$variable->json_name}}</td>
                        <td>{{$variable->calculated}}</td>
                        <td>{{$variable->calculation_operation}}</td>
                        <td>
                            {{ Form::open(['route'=> ['admin.variable.destroy', $variable->id],'method'=> 'DELETE','onsubmit' => 'return confirm("are you sure ?")']) }}
                                <a href="{{ route('admin.variable.show',$variable->id) }}"  class="btn btn-icon-toggle"  data-toggle="tooltip" data-original-title="Show {{$variable->name}}"><i class="fa fa-eye"></i></a>
                                <a href="{{ route('admin.variable.edit',$variable->id) }}"  class="btn btn-icon-toggle"  data-toggle="tooltip" data-original-title="Edit {{$variable->name}}"><i class="fa fa-pencil"></i></a>
                                <button type="submit" class="btn btn-icon-toggle" data-toggle="tooltip" data-original-title="Delete {{$variable->name}}"><i class="fa fa-trash-o"></i></button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
        {!! $variables->render() !!}
    </div>
@endsection

@section('javascript')

@endsection
