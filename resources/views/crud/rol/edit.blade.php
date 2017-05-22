@extends('template.main')


@section('headerCard')
    <div class="card-head">
        <header class="text-primary-dark">Create Role</header>
    </div>
@endsection


@section('content')

    <div class="col-lg-8 col-lg-offset-2">
        {!! Form::model($rol,['route'=> ['rol.update',$rol],'method'=> 'PUT', 'class'=> 'form-horizontal form-validate floating-label', 'novalidate'=>'novalidate']) !!}

        @include('forms.rol.rolForm')

        <div class="col-lg-offset-8">
            <div class="btn-group">
                <a href="{{ route('rol.index') }}" class="btn btn-raised btn-default btn-inline ink-reaction">Cancel</a>
                <button type="submit" class="btn btn-raised btn-primary btn-inline ink-reaction">Save</button>
            </div>
        </div>

        {!! Form::close() !!}
    </div>

@endsection