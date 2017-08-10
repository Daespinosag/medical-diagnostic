@extends('template.globalCard')

@section('headerCard')
    <div class="card-head">
        <header class="text-primary-dark">{{ trans('global.type-diagnosis.title.index') }}</header>

        <div class="tools">
            <div class="btn-group">
                <a href="{{ route('admin.typeDiagnosis.create') }}" type="button" class="btn btn-raised ink-reaction btn-primary btn-block" data-toggle="tooltip" data-original-title="Nuevo tipo de diagnóstico">{{ trans('global.buttons.new') }}</a>
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
                    <td>{{ trans('validation.attributes.description') }}</td>
                    <td>{{ trans('global.buttons.actions') }}</td>
                </tr>
            </thead>
            <tbody class="">
                @foreach($typesDiagnosis as $typeDiagnosis)
                    <tr class="">
                        <td>{{$typeDiagnosis->id}}</td>
                        <td>{{$typeDiagnosis->name }}</td>
                        <td>{{$typeDiagnosis->description}}</td>
                        <td>
                            {{ Form::open(['route'=> ['admin.typeDiagnosis.destroy', $typeDiagnosis->id],'method'=> 'DELETE','onsubmit' => 'return confirm("are you sure ?")']) }}
                                <a href="{{ route('admin.typeDiagnosis.show',$typeDiagnosis->id) }}"  class="btn btn-icon-toggle"  data-toggle="tooltip" data-original-title="Ver {{$typeDiagnosis->name}}"><i class="fa fa-eye"></i></a>
                                <a href="{{ route('admin.typeDiagnosis.edit',$typeDiagnosis->id) }}"  class="btn btn-icon-toggle"  data-toggle="tooltip" data-original-title="Editar {{$typeDiagnosis->name}}"><i class="fa fa-pencil"></i></a>
                                <button type="submit" class="btn btn-icon-toggle" data-toggle="tooltip" data-original-title="Eliminar {{$typeDiagnosis->name}}"><i class="fa fa-trash-o"></i></button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
        {!! $typesDiagnosis->render() !!}
    </div>
@endsection

@section('javascript')

@endsection
