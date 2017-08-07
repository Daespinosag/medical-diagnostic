@extends('template.main')

@section('content')


    <div class="col-md-4">
        <div class="card">
                <div class="card-head card-bordered style-primary">
                    <header><i class="fa fa-fw fa-tag"></i>{{ trans('global.variable.title.show') }}</header>
                </div>
            <div class="card-body">
                <div class="">
                    <img class="profile-user-img img-responsive img-circle center-block" width="100" height="100" src="{{ asset('assets/img/variable.png') }}" alt="User profile picture">
                    <h4 class="profile-username text-center">{{ $variable->name }}</h4>
                    <p class="text-muted text-center"> </p>
                </div>

                <ul class="list-group">
                    <li class="list-group-item">
                        <b>{{ trans('validation.attributes.json_name') }}</b>
                        <p class="pull-right">{{ $variable->json_name }}</p>
                    </li>

                    <li class="list-group-item">
                        <b>{{ trans('validation.attributes.calculated') }}</b>
                        <p class="pull-right">{{ $variable->calculated }}</p>
                    </li>
                    <li class="list-group-item">
                        <b>{{ trans('validation.attributes.calculation_operation') }}</b>
                        <p class="pull-right">{{ $variable->calculation_operation }}</p>
                    </li>
                    <li class="list-group-item">
                        <p class="text-center">{{ $variable->description }}</p>
                    </li>


                </ul>
                <div class="card-actionbar-row">
                    <a href="{{ route('admin.variable.index') }}" class="btn btn-raised btn-default btn-inline ink-reaction pull-left">{{ trans('global.buttons.return') }}</a>
                    <a href="{{ route('admin.variable.edit',$variable->id) }}" class="btn btn-raised btn-primary btn-inline ink-reaction">{{ trans('global.buttons.edit') }}</a>
                </div>
            </div>
        </div>
    </div>

@endsection