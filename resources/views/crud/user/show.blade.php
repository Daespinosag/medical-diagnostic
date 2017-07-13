@extends('template.main')

@section('content')


    <div class="col-md-4">
        <div class="card">
                <div class="card-head card-bordered style-primary">
                    <header><i class="fa fa-fw fa-tag"></i>{{ $user->username }}</header>
                </div>
            <div class="card-body">
                <div class="">
                    <img class="profile-user-img img-responsive img-circle center-block" width="100" height="100" @if($user->gender == 'F')src="{{ asset('assets/img/avatar_female.png') }}" @else src="{{ asset('assets/img/avatar_Male.png') }}" @endif alt="User profile picture">
                    <h4 class="profile-username text-center">{{ $user->name }}</h4>
                    <p class="text-muted text-center">{{ $user->email }}</p>
                </div>

                <ul class="list-group">
                    <li class="list-group-item">
                        <b>Username</b>
                        <p class="pull-right">{{ $user->username }}</p>
                    </li>

                    <li class="list-group-item">
                        <b class="">Gender</b>
                        <p class="pull-right">@if($user->gender == 'M') Male @else($user->gender == 'F') Female @endif </p>
                    </li>
                    <li class="list-group-item">
                        <b>Identification Card</b>
                        <p class="pull-right">{{ $user->identification_card }}</p>
                    </li>
                    <li class="list-group-item">
                        <p class="text-center">{{ $user->profession}}</p>
                    </li>

                </ul>
                <div class="card-actionbar-row">
                    <a href="{{ route('admin.user.index') }}" class="btn btn-raised btn-default btn-inline ink-reaction pull-left">Return</a>
                    <a href="{{ route('admin.user.edit',$user->id) }}" class="btn btn-raised btn-primary btn-inline ink-reaction">Edit</a>
                </div>
            </div>
        </div>
    </div>

@endsection