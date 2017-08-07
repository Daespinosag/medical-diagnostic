@extends('template.main')

@section('content')


    <div class="col-md-4">
        <div class="card">
                <div class="card-head card-bordered style-primary">
                    <header><i class="fa fa-fw fa-tag"></i>{{ trans('global.patients.title.show') }}</header>
                </div>
            <div class="card-body">
                <div class="">
                    <img class="profile-user-img img-responsive img-circle center-block" width="100" height="100" @if($patient->gender == 'F')src="{{ asset('assets/img/avatar_female.png') }}" @else src="{{ asset('assets/img/avatar_Male.png') }}" @endif alt="User profile picture">
                    <h4 class="profile-username text-center">{{ $patient->name.' '.$patient->last_name_1.' '.$patient->last_name_2 }}</h4>
                    <p class="text-muted text-center"> </p>
                </div>

                <ul class="list-group">
                    <li class="list-group-item">
                        <b>{{trans('validation.attributes.email')}}</b>
                        <p class="pull-right">{{ $patient->email }}</p>
                    </li>

                    <li class="list-group-item">
                        <b>{{trans('validation.attributes.identification-card')}}</b>
                        <p class="pull-right">{{ $patient->identification_card }}</p>
                    </li>
                    <li class="list-group-item">
                        <b class="">{{trans('validation.attributes.gender')}}</b>
                        <p class="pull-right">@if($patient->gender == 'M') Hombre @else($patient->gender == 'F') Mujer @endif </p>
                    </li>
                    <li class="list-group-item">
                        <b>Actualización</b>
                        <p class="pull-right">{{ $patient->updated_at }}</p>
                    </li>

                </ul>
                <div class="card-actionbar-row">
                    <a href="{{ route('admin.patient.index') }}" class="btn btn-raised btn-default btn-inline ink-reaction pull-left">{{ trans('global.buttons.return') }}</a>
                    <a href="{{ route('admin.patient.edit',$patient->id) }}" class="btn btn-raised btn-primary btn-inline ink-reaction">{{ trans('global.buttons.edit') }}</a>
                </div>
            </div>
        </div>
    </div>

@endsection