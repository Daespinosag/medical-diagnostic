@extends('template.globalCard')


@section('headerCard')
    <div class="card-head">
        <header class="text-primary-dark">List Users</header>

        <div class="tools">
            <div class="btn-group">
                <a href="{{ route('admin.user.create') }}" type="button" class="btn btn-raised ink-reaction btn-primary btn-block" data-toggle="tooltip" data-original-title="New user">New</a>
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
                    <td>Usename</td>
                    <td>profession</td>
                    <td>Gender</td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody class="">
                @foreach($users as $user)
                    <tr class="">
                        <td>{{$user->id}}</td>
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
                                <a href="{{ route('admin.user.show',$user->id) }}"  class="btn btn-icon-toggle"  data-toggle="tooltip" data-original-title="Show {{$user->username}}"><i class="fa fa-eye"></i></a>
                                <a href="{{ route('admin.user.edit',$user->id) }}"  class="btn btn-icon-toggle"  data-toggle="tooltip" data-original-title="Edit {{$user->username}}"><i class="fa fa-pencil"></i></a>
                                <button type="submit" class="btn btn-icon-toggle" data-toggle="tooltip" data-original-title="Delete {{$user->username}}"><i class="fa fa-trash-o"></i></button>
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
