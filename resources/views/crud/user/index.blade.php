@extends('template.globalCard')


@section('headerCard')
    <div class="card-head">
        <header class="text-primary-dark">{{ trans('global.users.title.index') }}</header>

        <div class="tools">
            <div class="btn-group">
                <a href="{{ route('admin.user.create') }}" type="button" class="btn btn-raised ink-reaction btn-primary btn-block" data-toggle="tooltip" data-original-title="Nuevo user">{{ trans('global.buttons.new') }}</a>
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
                    <td>{{ trans('validation.attributes.rol') }}</td>
                    <td>{{ trans('validation.attributes.name') }}</td>
                    <td>{{ trans('validation.attributes.username') }}</td>
                    <td>{{ trans('validation.attributes.profession') }}</td>
                    <td>{{ trans('validation.attributes.gender') }}</td>
                    <td>{{ trans('global.buttons.actions') }}</td>
                </tr>
            </thead>
            <tbody class="">
                @foreach($users as $user)
                    <tr class="">
                        <td>{{$user->id}}</td>
                        <td>{{$user->role->name}}</td>
                        <td>{{$user->name }}</td>
                        <td>{{$user->username}}</td>
                        <td>{{$user->profession}}</td>
                        @if($user->gender == 'F')
                            <td><img src="{{ asset('assets/img/female-gender-symbol.png') }}" alt=""></td>
                        @else
                            <td><img src="{{ asset('assets/img/male-gender-symbol.png') }}" alt=""></td>
                        @endif
                        <td>
                            {{ Form::open(['route'=> ['admin.user.destroy', $user->id],'method'=> 'DELETE','onsubmit' => 'return confirm("are you sure ?")']) }}
                                <a href="{{ route('admin.user.show',$user->id) }}"  class="btn btn-icon-toggle"  data-toggle="tooltip" data-original-title="Ver {{$user->username}}"><i class="fa fa-eye"></i></a>
                                <a href="{{ route('admin.user.edit',$user->id) }}"  class="btn btn-icon-toggle"  data-toggle="tooltip" data-original-title="Editar {{$user->username}}"><i class="fa fa-pencil"></i></a>
                                <button type="submit" class="btn btn-icon-toggle" data-toggle="tooltip" data-original-title="Eliminar {{$user->username}}"><i class="fa fa-trash-o"></i></button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
        {!! $users->render() !!}
    </div>
@endsection

@section('javascript')

@endsection
