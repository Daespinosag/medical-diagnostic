@extends('template.globalCard')


@section('headerCard')
    <div class="card-head">
        <header class="text-primary-dark">{{ trans('global.permissions.title.index') }}</header>

        <div class="tools">
            <div class="btn-group">
                <a href="{{ route('admin.permission.create') }}" type="button" class="btn btn-raised ink-reaction btn-primary btn-block" data-toggle="tooltip" data-original-title="New Permission">{{ trans('global.buttons.new') }}</a>
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
                    <td>{{ trans('validation.attributes.key-name') }}</td>
                    <td>{{ trans('validation.attributes.description') }}</td>
                    <td>{{ trans('global.buttons.actions') }}</td>
                </tr>
            </thead>
            <tbody class="">
                @foreach($permissions as $permission)
                    <tr class="">
                        <td>{{$permission->id}}</td>
                        <td>{{$permission->name }}</td>
                        <td>{{$permission->display_name}}</td>
                        <td>{{$permission->description}}</td>
                        <td>
                            {{ Form::open(['route'=> ['admin.permission.destroy', $permission->id],'method'=> 'DELETE','onsubmit' => 'return confirm("are you sure ?")']) }}
                                <a href="{{ route('admin.permission.show',$permission->id) }}"  class="btn btn-icon-toggle"  data-toggle="tooltip" data-original-title="Ver {{$permission->name}}"><i class="fa fa-eye"></i></a>
                                <a href="{{ route('admin.permission.edit',$permission->id) }}"  class="btn btn-icon-toggle"  data-toggle="tooltip" data-original-title="Editar {{$permission->name}}"><i class="fa fa-pencil"></i></a>
                                <button type="submit" class="btn btn-icon-toggle" data-toggle="tooltip" data-original-title="Eliminar {{$permission->name}}"><i class="fa fa-trash-o"></i></button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
        {!! $permissions->render() !!}
    </div>
@endsection

@section('javascript')

@endsection
