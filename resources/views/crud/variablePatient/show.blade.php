@extends('template.main')

@section('content')


    <div class="col-md-4">
        <div class="card">
                <div class="card-head card-bordered style-primary">
                    <header><i class="fa fa-fw fa-tag"></i>Variable Patient Profile</header>
                </div>
            <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item">
                        <b>Professional</b>
                        <p class="pull-right">{{ $variablePatient->user->name }}</p>
                    </li>
                    <li class="list-group-item">
                        <b>Patient</b>
                        <p class="pull-right">{{ $variablePatient->patient->name.' '. $variablePatient->patient->last_name_1.' '.$variablePatient->patient->last_name_2 }} </p>
                    </li>
                    <li class="list-group-item">
                        <b>Variable</b>
                        <p class="pull-right">{{ $variablePatient->variable->name }}</p>
                    </li>
                    <li class="list-group-item">
                        <b>Value</b>
                        <p class="pull-right">{{ $variablePatient->value }}</p>
                    </li>

                    <li class="list-group-item">
                        <b>Completed Date</b>
                        <p class="pull-right">{{ $variablePatient->completed_date }}</p>
                    </li>

                </ul>
                <div class="card-actionbar-row">
                    <a href="{{ route('admin.variablePatient.index') }}" class="btn btn-raised btn-default btn-inline ink-reaction pull-left">Return</a>
                    <a href="{{ route('admin.variablePatient.edit',$variablePatient->id) }}" class="btn btn-raised btn-primary btn-inline ink-reaction">Edit</a>
                </div>
            </div>
        </div>
    </div>

@endsection