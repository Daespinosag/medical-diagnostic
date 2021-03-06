@extends('template.globalCard')


@section('headerCard')
    <div class="card-head">
        <header class="text-primary-dark">{{ trans('global.role.title.edit') }}</header>
    </div>
@endsection


@section('bodyCard')

    <div class="col-lg-8 col-lg-offset-2">
        {!! Form::model($rol,['route'=> ['admin.rol.update',$rol],'method'=> 'PUT', 'class'=> 'form-horizontal form-validate floating-label', 'novalidate'=>'novalidate']) !!}

        @include('forms.rol.rolForm',['actualityPermission'=> $rol->permissions->pluck('id')->toArray()])

            <div class="card-actionbar-row">
                <a href="{{ route('admin.rol.index') }}" class="btn btn-raised btn-default btn-inline ink-reaction">{{ trans('global.buttons.cancel') }}</a>
                <button type="submit" class="btn btn-raised btn-primary btn-inline ink-reaction">{{ trans('global.buttons.save') }}</button>
            </div>

        {!! Form::close() !!}
    </div>

@endsection

@section('javascript')

@endsection