@extends('template.main')

@section('content')


    <div class="col-md-4">
        <div class="card">
                <div class="card-head card-bordered style-primary">
                    <header><i class="fa fa-fw fa-tag"></i>Permission Profile</header>
                </div>
            <div class="card-body">
                <div class="">
                    <img class="profile-user-img img-responsive img-circle center-block" width="100" height="100" src="{{ asset('assets/img/permission.png') }}"  alt="User profile picture">
                    </br>
                </div>

                <ul class="list-group">
                    <li class="list-group-item">
                        <b>Key Name</b>
                        <p class="pull-right">{{ $permission->name }}</p>
                    </li>

                    <li class="list-group-item">
                        <b>Complete Name</b>
                        <p class="pull-right">{{ $permission->display_name }}</p>
                    </li>
                    <li class="list-group-item">
                        <p class="text-center">{{ $permission->description }}</p>
                    </li>

                </ul>
                <div class="card-actionbar-row">
                    <a href="{{ route('admin.permission.index') }}" class="btn btn-raised btn-default btn-inline ink-reaction pull-left">Return</a>
                    <a href="{{ route('admin.permission.edit',$permission->id) }}" class="btn btn-raised btn-primary btn-inline ink-reaction">Edit</a>
                </div>
            </div>
        </div>
    </div>

@endsection