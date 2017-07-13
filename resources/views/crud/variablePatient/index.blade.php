@extends('template.globalCard')


@section('headerCard')
    <div class="card-head">
        <header class="text-primary-dark">List Variable Patient</header>

        <div class="tools">
            <div class="btn-group">
                <a href="{{ route('admin.variablePatient.create') }}" type="button" class="btn btn-raised ink-reaction btn-primary btn-block" data-toggle="tooltip" data-original-title="New Role">New</a>
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
                    <td>patient</td>
                    <td>variable</td>
                    <td>User</td>
                    <td>Value</td>
                    <td>Completed Date</td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody class="">
                @foreach($variablePatients as $variablePatient)
                    <tr class="">
                        <td>{{$variablePatient->id}}</td>
                        <td>{{$variablePatient->patient->name }}</td>
                        <td>{{$variablePatient->variable->name}}</td>
                        <td>{{$variablePatient->user->name}}</td>
                        <td>{{$variablePatient->value}}</td>
                        <td>{{$variablePatient->completed_date}}</td>
                        <td>
                            {{ Form::open(['route'=> ['admin.variablePatient.destroy', $variablePatient->id],'method'=> 'DELETE','onsubmit' => 'return confirm("are you sure ?")']) }}
                                <a href="{{ route('admin.variablePatient.show',$variablePatient->id) }}"  class="btn btn-icon-toggle"  data-toggle="tooltip" data-original-title="Show {{$variablePatient->id}}"><i class="fa fa-eye"></i></a>
                                <a href="{{ route('admin.variablePatient.edit',$variablePatient->id) }}"  class="btn btn-icon-toggle"  data-toggle="tooltip" data-original-title="Edit {{$variablePatient->id}}"><i class="fa fa-pencil"></i></a>
                                <button type="submit" class="btn btn-icon-toggle" data-toggle="tooltip" data-original-title="Delete {{$variablePatient->id}}"><i class="fa fa-trash-o"></i></button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
        {!! $variablePatients->render() !!}
    </div>
@endsection

@section('javascript')

@endsection
