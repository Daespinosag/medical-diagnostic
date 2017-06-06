@extends('template.globalCard')


@section('headerCard')
    <div class="card-head">
        <header class="text-primary-dark">Create User</header>
    </div>
@endsection


@section('bodyCard')

    <div class="col-lg-8 col-lg-offset-2">
        {!! Form::open(['route'=> 'admin.user.store','method'=> 'POST', 'class'=> 'form-horizontal form-validate floating-label', 'novalidate'=>'novalidate']) !!}

            @include('forms.user.userForm',['method'=> 'create','actualityRoles'=> null])

            <div class="card-actionbar-row">
                <a href="{{ route('admin.user.index') }}" class="btn btn-raised btn-default btn-inline ink-reaction">Cancel</a>
                <button type="submit" class="btn btn-raised btn-primary btn-inline ink-reaction">Save</button>
            </div>

        {!! Form::close() !!}
    </div>

@endsection