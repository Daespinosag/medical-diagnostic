@extends('template.globalCard')


@section('headerCard')
    <div class="card-head">
        <header class="text-primary-dark">List Role</header>

        <div class="tools">
            <div class="btn-group">
                <a href="{{ route('admin.rol.create') }}" type="button" class="btn btn-raised ink-reaction btn-primary btn-block" data-toggle="tooltip" data-original-title="New Role">New</a>
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
                    <td>Description</td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody class="">
                @foreach($role as $rol)
                    <tr class="">
                        <td>{{$rol->id}}</td>
                        <td>{{$rol->name }}</td>
                        <td>{{$rol->description}}</td>
                        <td>
                            {{ Form::open(['route'=> ['admin.rol.destroy', $rol->id],'method'=> 'DELETE','onsubmit' => 'return confirm("are you sure ?")']) }}
                                <a href="{{ route('admin.rol.show',$rol->id) }}"  class="btn btn-icon-toggle"  data-toggle="tooltip" data-original-title="Show {{$rol->name}}"><i class="fa fa-eye"></i></a>
                                <a href="{{ route('admin.rol.edit',$rol->id) }}"  class="btn btn-icon-toggle"  data-toggle="tooltip" data-original-title="Edit {{$rol->name}}"><i class="fa fa-pencil"></i></a>
                                <button type="submit" class="btn btn-icon-toggle" data-toggle="tooltip" data-original-title="Delete {{$rol->name}}"><i class="fa fa-trash-o"></i></button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
        {!! $role->render() !!}
    </div>
@endsection

@section('javascript')

@endsection
