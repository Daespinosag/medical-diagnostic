@extends('template.globalCard')


@section('headerCard')
    <div class="card-head">
        <header class="text-primary-dark">Create Role</header>
    </div>
@endsection


@section('bodyCard')

    <div class="col-lg-8 col-lg-offset-2">
        {!! Form::model($typeDiagnosis,['route'=> ['admin.typeDiagnosis.update',$typeDiagnosis],'method'=> 'PUT', 'class'=> 'form-horizontal form-validate floating-label', 'novalidate'=>'novalidate']) !!}

        @include('forms.rol.rolForm')

            <div class="card-actionbar-row">
                <a href="{{ route('admin.typeDiagnosis.index') }}" class="btn btn-raised btn-default btn-inline ink-reaction">Cancel</a>
                <button type="submit" class="btn btn-raised btn-primary btn-inline ink-reaction">Save</button>
            </div>

        {!! Form::close() !!}
    </div>

@endsection