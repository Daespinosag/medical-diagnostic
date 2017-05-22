@extends('template.main')


@section('headerCard')
    <div class="card-head">
        <header class="text-primary-dark">List Role</header>

        <div class="tools">
            <div class="btn-group">
                <a href="{{ route('rol.create') }}" type="button" class="btn btn-raised ink-reaction btn-primary btn-block" data-toggle="tooltip" data-original-title="New Role">New</a>
            </div>
        </div>
    </div>
@endsection


@section('content')

    <div>
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
                            <button type="button" class="btn btn-icon-toggle"  data-toggle="modal" data-target="#modalShow"data-original-title="Show {{$rol->name}}"><i class="fa fa-eye"></i></button>
                            <a href="{{ route('rol.edit',$rol->id) }}" type="button" class="btn btn-icon-toggle"  data-toggle="tooltip" data-placement="top" data-original-title="Edit {{$rol->name}}"><i class="fa fa-pencil"></i></a>
                            <button type="button" class="btn btn-icon-toggle" data-toggle="modal" data-target="#modalDelete" data-original-title="Delete {{$rol->name}}"><i class="fa fa-trash-o"></i></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>


    <!-- Modal Show-->
    <div id="modalShow" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Role </h4>
                </div>
                <div class="modal-body">
                    <p><strong>{{$rol->name}} :</strong>{{$rol->description}}</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

    <!-- Modal Show-->
    <div id="modalDelete" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Do you want to delete the role? </h4>
                </div>
                <div class="modal-body">
                    <p><strong>{{$rol->name}} :</strong>{{$rol->description}}</p>
                </div>
                <div class="modal-footer">

                    {!! Form::open(['route'=> ['rol.destroy',$rol->id],'method'=> 'DELETE']) !!}
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    {!! Form::close() !!}

                </div>
            </div>

        </div>
    </div>


@endsection
