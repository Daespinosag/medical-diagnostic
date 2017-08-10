@extends('template.main')

@section('content')


    <div class="col-md-4">
        <div class="card">
                <div class="card-head card-bordered style-primary">
                    <header><i class="fa fa-fw fa-tag"></i>{{ trans('global.variable-patient.title.show') }}</header>
                </div>
            <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item">
                        <b>{{ trans('validation.attributes.professional') }}</b>
                        <p class="pull-right">{{ $variablePatient->user->name }}</p>
                    </li>
                    <li class="list-group-item">
                        <b>{{ trans('validation.attributes.patient') }}</b>
                        <p class="pull-right">{{ $variablePatient->patient->name.' '. $variablePatient->patient->last_name_1.' '.$variablePatient->patient->last_name_2 }} </p>
                    </li>
                    <li class="list-group-item">
                        <b>{{ trans('validation.attributes.variable') }}</b>
                        <p class="pull-right">{{ $variablePatient->variable->name }}</p>
                    </li>
                    <li class="list-group-item">
                        <b>{{ trans('validation.attributes.value') }}</b>
                        <p class="pull-right">{{ $variablePatient->value }}</p>
                    </li>

                    <li class="list-group-item">
                        <b>{{ trans('validation.attributes.completed_date') }}</b>
                        <p class="pull-right">{{ $variablePatient->completed_date }}</p>
                    </li>

                </ul>
                <div class="card-actionbar-row">
                    <a href="{{ route('admin.variablePatient.index') }}" class="btn btn-raised btn-default btn-inline ink-reaction pull-left">{{ trans('global.buttons.return') }}</a>
                    <a href="{{ route('admin.variablePatient.edit',$variablePatient->id) }}" class="btn btn-raised btn-primary btn-inline ink-reaction">{{ trans('global.buttons.edit') }}</a>
                </div>
            </div>
        </div>
    </div>

@endsection