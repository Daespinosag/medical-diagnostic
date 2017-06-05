@extends('template.globalCard')


@section('headerCard')
    <div class="card-head">
        <header class="text-primary-dark">Create Diagnosis</header>
    </div>
@endsection


@section('bodyCard')

    <div class="col-lg-8 col-lg-offset-2">
        {!! Form::model($typesDiagnostics,['route'=> 'admin.diagnosis.store','method'=> 'POST', 'class'=> 'form-horizontal form-validate floating-label', 'novalidate'=>'novalidate']) !!}

            @include('forms.diagnosis.diagnosisForm')

            <div class="card-actionbar-row">
                <a href="{{ route('admin.diagnosis.index') }}" class="btn btn-raised btn-default btn-inline ink-reaction">Cancel</a>
                <button type="submit" class="btn btn-raised btn-primary btn-inline ink-reaction">Save</button>
            </div>

        {!! Form::close() !!}
    </div>

@endsection