@extends('template.main')

@section('content')


    <div class="col-md-4">
        <div class="card">
                <div class="card-head card-bordered style-primary">
                    <header><i class="fa fa-fw fa-tag"></i>Patient Profile</header>
                </div>
            <div class="card-body">
                <div class="">
                    <img class="profile-user-img img-responsive img-circle center-block" width="100" height="100" @if($patient->gender == 'F')src="{{ asset('assets/img/avatar_female.png') }}" @else src="{{ asset('assets/img/avatar_Male.png') }}" @endif alt="User profile picture">
                    <h4 class="profile-username text-center">{{ $patient->name.' '.$patient->last_name_1.' '.$patient->last_name_2 }}</h4>
                    <p class="text-muted text-center"> </p>
                </div>

                <ul class="list-group">
                    <li class="list-group-item">
                        <b>Email</b>
                        <p class="pull-right">{{ $patient->email }}</p>
                    </li>

                    <li class="list-group-item">
                        <b>Identification Card</b>
                        <p class="pull-right">{{ $patient->identification_card }}</p>
                    </li>
                    <li class="list-group-item">
                        <b class="">Gender</b>
                        <p class="pull-right">@if($patient->gender == 'M') Male @else($patient->gender == 'F') Female @endif </p>
                    </li>
                    <li class="list-group-item">
                        <b>Update</b>
                        <p class="pull-right">{{ $patient->updated_at }}</p>
                    </li>

                </ul>
                <div class="card-actionbar-row">
                    <a href="{{ route('admin.patient.index') }}" class="btn btn-raised btn-default btn-inline ink-reaction pull-left">Return</a>
                    <a href="{{ route('admin.patient.edit',$patient->id) }}" class="btn btn-raised btn-primary btn-inline ink-reaction">Edit</a>
                </div>
            </div>
        </div>
    </div>

@endsection