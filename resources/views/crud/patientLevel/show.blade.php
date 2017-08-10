@extends('template.main')

@section('content')


    <div class="col-md-4">
        <div class="card">
                <div class="card-head card-bordered style-primary">
                    <header><i class="fa fa-fw fa-tag"></i>{{ trans('global.patient-level.title.show') }}</header>
                </div>
            <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item">
                        <b>{{trans('validation.attributes.diagnosis')}}</b>
                        <p class="pull-right">{{ $patientLevel->level->diagnosis->name }}</p>
                    </li>
                    <li class="list-group-item">
                        <b>{{trans('validation.attributes.patient')}}</b>
                        <p class="pull-right">{{ $patientLevel->patient->name.' '. $patientLevel->patient->last_name_1.' '.$patientLevel->patient->last_name_2 }} </p>
                    </li>
                    <li class="list-group-item">
                        <b>{{trans('validation.attributes.diagnosis_date')}}</b>
                        <p class="pull-right">{{ $patientLevel->diagnosis_date }}</p>
                    </li>

                </ul>
                <div class="card-actionbar-row">
                    <a href="{{ route('admin.patientLevel.index') }}" class="btn btn-raised btn-default btn-inline ink-reaction pull-left">{{ trans('global.buttons.return') }}</a>
                    <a href="{{ route('admin.patientLevel.edit',$patientLevel->id) }}" class="btn btn-raised btn-primary btn-inline ink-reaction">{{ trans('global.buttons.edit') }}</a>
                </div>
            </div>
        </div>
    </div>

@endsection