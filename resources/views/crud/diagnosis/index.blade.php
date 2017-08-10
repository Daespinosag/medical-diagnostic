@extends('template.globalCard')


@section('headerCard')
    <div class="card-head">
        <header class="text-primary-dark">{{ trans('global.diagnosis.title.index') }}</header>

        <div class="tools">
            <div class="btn-group">
                <a href="{{ route('admin.diagnosis.create') }}" type="button" class="btn btn-raised ink-reaction btn-primary btn-block" data-toggle="tooltip" data-original-title="Nuevo Diagnóstico">{{ trans('global.buttons.new') }}</a>
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
                    <td>{{ trans('validation.attributes.type_diagnosis') }}</td>
                    <td>{{ trans('validation.attributes.description') }}</td>
                    <td>{{ trans('global.buttons.actions') }}</td>
                </tr>
            </thead>
            <tbody class="">
                @foreach($diagnostics as $diagnosis)
                    <tr class="">
                        <td>{{$diagnosis->id}}</td>
                        <td>{{$diagnosis->name }}</td>
                        <td>{{$diagnosis->typeDiagnosis->name }}</td>
                        <td>{{$diagnosis->description}}</td>
                        <td>
                            {{ Form::open(['route'=> ['admin.diagnosis.destroy', $diagnosis->id],'method'=> 'DELETE','onsubmit' => 'return confirm("are you sure ?")']) }}
                                <a href="{{ route('admin.diagnosis.show',$diagnosis->id) }}"  class="btn btn-icon-toggle"  data-toggle="tooltip" data-original-title="Ver {{$diagnosis->name}}"><i class="fa fa-eye"></i></a>
                                <a href="{{ route('admin.diagnosis.edit',$diagnosis->id) }}"  class="btn btn-icon-toggle"  data-toggle="tooltip" data-original-title="Editar {{$diagnosis->name}}"><i class="fa fa-pencil"></i></a>
                                <button type="submit" class="btn btn-icon-toggle" data-toggle="tooltip" data-original-title="Eliminar {{$diagnosis->name}}"><i class="fa fa-trash-o"></i></button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
        {!! $diagnostics->render() !!}
    </div>
@endsection

@section('javascript')

@endsection
