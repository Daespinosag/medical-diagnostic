@extends('template.globalCard')


@section('headerCard')
    <div class="card-head">
        <header class="text-primary-dark">{{ trans('global.patients.title.index') }}</header>

        <div class="tools">
            <div class="btn-group">
                <a href="{{ route('admin.patient.create') }}" type="button" class="btn btn-raised ink-reaction btn-primary btn-block" data-toggle="tooltip" data-original-title="Nuevo Paciente">{{ trans('global.buttons.new') }}</a>
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
                    <td>{{ trans('validation.attributes.name') }}</td>
                    <td>{{ trans('validation.attributes.last-name-one') }}</td>
                    <td>{{ trans('validation.attributes.last-name-two') }}o</td>
                    <td>{{ trans('validation.attributes.email') }}</td>
                    <td>{{ trans('validation.attributes.identification-card') }}</td>
                    <td>{{ trans('validation.attributes.gender') }}</td>
                    <td>{{ trans('global.buttons.actions') }}</td>
                </tr>
            </thead>
            <tbody class="">
                @foreach($patients as $patient)
                    <tr class="">
                        <td>{{$patient->id}}</td>
                        <td>{{$patient->name }}</td>
                        <td>{{$patient->last_name_1}}</td>
                        <td>{{$patient->last_name_2}}</td>
                        <td>{{$patient->email}}</td>
                        <td>{{$patient->identification_card}}</td>
                        @if($patient->gender == 'F')
                            <td><img src="{{ asset('assets/img/female-gender-symbol.png') }}" alt=""></td>
                        @else
                            <td><img src="{{ asset('assets/img/male-gender-symbol.png') }}" alt=""></td>
                        @endif
                        <td>
                            {{ Form::open(['route'=> ['admin.patient.destroy', $patient->id],'method'=> 'DELETE','onsubmit' => 'return confirm("are you sure ?")']) }}
                                <a href="{{ route('admin.patient.show',$patient->id) }}"  class="btn btn-icon-toggle"  data-toggle="tooltip" data-original-title="Ver {{$patient->name}}"><i class="fa fa-eye"></i></a>
                                <a href="{{ route('admin.patient.edit',$patient->id) }}"  class="btn btn-icon-toggle"  data-toggle="tooltip" data-original-title="Editar {{$patient->name}}"><i class="fa fa-pencil"></i></a>
                                <button type="submit" class="btn btn-icon-toggle" data-toggle="tooltip" data-original-title="Eliminar {{$patient->name}}"><i class="fa fa-trash-o"></i></button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
        {!! $patients->render() !!}
    </div>
@endsection

@section('javascript')

@endsection
