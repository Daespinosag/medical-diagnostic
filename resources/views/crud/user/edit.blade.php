@extends('template.globalCard')


@section('headerCard')
    <div class="card-head">
        <header class="text-primary-dark">{{ trans('global.users.title.edit') }}</header>
    </div>
@endsection


@section('bodyCard')

    <div class="col-lg-8 col-lg-offset-2">
        {!! Form::model($user,['route'=> ['admin.user.update',$user],'method'=> 'PUT', 'class'=> 'form-horizontal form-validate floating-label', 'novalidate'=>'novalidate']) !!}

        @include('forms.user.userForm',['method'=> 'update','actualityRoles'=> $user->role->id])

            <div class="card-actionbar-row">
                <a href="{{ route('admin.user.index') }}" class="btn btn-raised btn-default btn-inline ink-reaction">{{ trans('global.buttons.cancel') }}</a>
                <button type="submit" class="btn btn-raised btn-primary btn-inline ink-reaction">{{ trans('global.buttons.save') }}</button>
            </div>

        {!! Form::close() !!}
    </div>

@endsection

@section('javascript')

@endsection