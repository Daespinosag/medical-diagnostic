@extends('template.main')

@section('content')


    <div class="col-md-4">
        <div class="card">
                <div class="card-head card-bordered style-primary">
                    <header><i class="fa fa-fw fa-tag"></i>{{ trans('global.level.title.show') }}</header>
                </div>
            <div class="card-body">
                <div class="">
                    <img class="profile-user-img img-responsive img-circle center-block" width="100" height="100" @if($level->gender == 'F')src="{{ asset('assets/img/avatar_female.png') }}" @else src="{{ asset('assets/img/avatar_male.png') }}" @endif alt="User profile picture">
                    <h4 class="profile-username text-center"></h4>
                    <p class="text-muted text-center"> </p>
                </div>

                <ul class="list-group">
                    <li class="list-group-item">
                        <b>{{ trans('validation.attributes.name') }}</b>
                        <p class="pull-right">{{ $level->diagnosis->name }}</p>
                    </li>

                    <li class="list-group-item">
                        <b>{{ trans('validation.attributes.response') }}</b>
                        <p class="pull-right">{{ $level->response }}</p>
                    </li>
                    <li class="list-group-item">
                        <b class="">{{ trans('validation.attributes.gender') }}</b>
                        <p class="pull-right">@if($level->gender == 'M') Hombre @elseif($level->gender == 'F') Mujer  @elseif($level->gender == 'ALL')  Unisex @endif </p>
                    </li>
                    <li class="list-group-item">
                        <p class="text-center">{{ $level->formula }}</p>
                    </li>

                </ul>
                <div class="card-actionbar-row">
                    <a href="{{ route('admin.level.index') }}" class="btn btn-raised btn-default btn-inline ink-reaction pull-left">{{ trans('global.buttons.return') }}</a>
                    <a href="{{ route('admin.level.edit',$level->id) }}" class="btn btn-raised btn-primary btn-inline ink-reaction">{{ trans('global.buttons.edit') }}</a>
                </div>
            </div>
        </div>
    </div>

@endsection