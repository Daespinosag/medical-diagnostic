@extends('template.globalCard')


@section('headerCard')
    <div class="card-head">
        <header class="text-primary-dark">{{ trans('global.patients.title.edit') }}</header>
    </div>
@endsection


@section('bodyCard')

    <div class="col-lg-8 col-lg-offset-2">
        {!! Form::model($patient,['route'=> ['admin.patient.update',$patient],'method'=> 'PUT', 'class'=> 'form-horizontal form-validate floating-label', 'novalidate'=>'novalidate']) !!}

        @include('forms.patient.patientForm')

            <div class="card-actionbar-row">
                <a href="{{ route('admin.patient.index') }}" class="btn btn-raised btn-default btn-inline ink-reaction">{{ trans('global.buttons.cancel') }}</a>
                <button type="submit" class="btn btn-raised btn-primary btn-inline ink-reaction">{{ trans('global.buttons.save') }}</button>
            </div>

        {!! Form::close() !!}
    </div>

@endsection