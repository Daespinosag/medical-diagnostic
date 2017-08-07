@extends('template.globalCard')


@section('headerCard')
    <div class="card-head">
        <header class="text-primary-dark">{{ trans('global.variable-patient.title.index') }}</header>

        <div class="tools">
            <div class="btn-group">
                <a href="{{ route('admin.variablePatient.create') }}" type="button" class="btn btn-raised ink-reaction btn-primary btn-block" data-toggle="tooltip" data-original-title="Nueva Variable de Paciente">{{ trans('global.buttons.new') }}</a>
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
                    <td>{{ trans('validation.attributes.patient') }}</td>
                    <td>{{ trans('validation.attributes.variable') }}</td>
                    <td>{{ trans('validation.attributes.user') }}</td>
                    <td>{{ trans('validation.attributes.value') }}</td>
                    <td>{{ trans('validation.attributes.completed_date') }}</td>
                    <td>{{ trans('global.buttons.actions') }}</td>
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
                                <a href="{{ route('admin.variablePatient.show',$variablePatient->id) }}"  class="btn btn-icon-toggle"  data-toggle="tooltip" data-original-title="Ver {{$variablePatient->id}}"><i class="fa fa-eye"></i></a>
                                <a href="{{ route('admin.variablePatient.edit',$variablePatient->id) }}"  class="btn btn-icon-toggle"  data-toggle="tooltip" data-original-title="Editar {{$variablePatient->id}}"><i class="fa fa-pencil"></i></a>
                                <button type="submit" class="btn btn-icon-toggle" data-toggle="tooltip" data-original-title="Eliminar {{$variablePatient->id}}"><i class="fa fa-trash-o"></i></button>
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
