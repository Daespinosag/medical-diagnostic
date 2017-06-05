@extends('template.globalCard')


@section('headerCard')
    <div class="card-head">
        <header class="text-primary-dark">List Permissions</header>

        <div class="tools">
            <div class="btn-group">
                <a href="{{ route('admin.permission.create') }}" type="button" class="btn btn-raised ink-reaction btn-primary btn-block" data-toggle="tooltip" data-original-title="New Permission">New</a>
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
                    <td>Display Name</td>
                    <td>Description</td>
                    <td>Actions</td>
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
                                <a href="{{ route('admin.permission.show',$permission->id) }}"  class="btn btn-icon-toggle"  data-toggle="tooltip" data-original-title="Show {{$permission->name}}"><i class="fa fa-eye"></i></a>
                                <a href="{{ route('admin.permission.edit',$permission->id) }}"  class="btn btn-icon-toggle"  data-toggle="tooltip" data-original-title="Edit {{$permission->name}}"><i class="fa fa-pencil"></i></a>
                                <button type="submit" class="btn btn-icon-toggle" data-toggle="tooltip" data-original-title="Delete {{$permission->name}}"><i class="fa fa-trash-o"></i></button>
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
