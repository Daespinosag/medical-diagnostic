@extends('template.globalCard')


@section('headerCard')
    <div class="card-head">
        <header class="text-primary-dark">{{ trans('global.level.title.index') }}</header>

        <div class="tools">
            <div class="btn-group">
                <a href="{{ route('admin.level.create') }}" type="button" class="btn btn-raised ink-reaction btn-primary btn-block" data-toggle="tooltip" data-original-title="Nuevo nivel">{{ trans('global.buttons.new') }}</a>
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
                    <td>{{ trans('validation.attributes.diagnosis') }}</td>
                    <td>{{ trans('validation.attributes.name') }}</td>
                    <td>{{ trans('validation.attributes.formula') }}</td>
                    <td>{{ trans('validation.attributes.response') }}</td>
                    <td>{{ trans('validation.attributes.gender') }}</td>
                    <td>{{ trans('global.buttons.actions') }}</td>
                </tr>
            </thead>
            <tbody class="">
                @foreach($levels as $level)
                    <tr class="">
                        <td>{{$level->id}}</td>
                        <td>{{$level->diagnosis->name }}</td>
                        <td>{{$level->name }}</td>
                        <td>{{$level->formula}}</td>
                        <td>{{$level->response}}</td>
                        @if($level->gender == 'F')
                            <td><img src="{{ asset('assets/img/female-gender-symbol.png') }}" alt=""></td>
                        @else
                            <td><img src="{{ asset('assets/img/male-gender-symbol.png') }}" alt=""></td>
                        @endif
                        <td>
                            {{ Form::open(['route'=> ['admin.level.destroy', $level->id],'method'=> 'DELETE','onsubmit' => 'return confirm("are you sure ?")']) }}
                                <a href="{{ route('admin.level.show',$level->id) }}"  class="btn btn-icon-toggle"  data-toggle="tooltip" data-original-title="Ver {{$level->formula}}"><i class="fa fa-eye"></i></a>
                                <a href="{{ route('admin.level.edit',$level->id) }}"  class="btn btn-icon-toggle"  data-toggle="tooltip" data-original-title="Editar {{$level->formula}}"><i class="fa fa-pencil"></i></a>
                                <button type="submit" class="btn btn-icon-toggle" data-toggle="tooltip" data-original-title="Eliminar {{$level->formula}}"><i class="fa fa-trash-o"></i></button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
        {!! $levels->render() !!}
    </div>
@endsection

@section('javascript')

@endsection
