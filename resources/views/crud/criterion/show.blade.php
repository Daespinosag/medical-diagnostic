@extends('template.main')

@section('content')


    <div class="col-md-4">
        <div class="card">
                <div class="card-head card-bordered style-primary">
                    <header><i class="fa fa-fw fa-tag"></i>Criterion Profile</header>
                </div>
            <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item">
                        <b>Diagnosis</b>
                        <p class="pull-right">{{ $criterion->level->diagnosis->name }}</p>
                    </li>
                    <li class="list-group-item">
                        <b>Variable</b>
                        <p class="pull-right">{{ $criterion->variable->name }}</p>
                    </li>
                    <li class="list-group-item">
                        <b>Formula Level</b>
                        <p class="pull-right">{{ $criterion->level->formula }}</p>
                    </li>
                    <li class="list-group-item">
                        <b>Comparison Operator</b>
                        <p class="pull-right">{{ $criterion->comparison_operator }}</p>
                    </li>

                    <li class="list-group-item">
                        <b>Value One</b>
                        <p class="pull-right">{{ $criterion->value_1 }}</p>
                    </li>
                    <li class="list-group-item">
                        <b>Value Two</b>
                        <p class="pull-right">{{ $criterion->value_2 }}</p>
                    </li>
                    <li class="list-group-item">
                        <b>Unit</b>
                        <p class="pull-right">{{ $criterion->unit }}</p>
                    </li>

                </ul>
                <div class="card-actionbar-row">
                    <a href="{{ route('admin.criterion.index') }}" class="btn btn-raised btn-default btn-inline ink-reaction pull-left">Return</a>
                    <a href="{{ route('admin.criterion.edit',$criterion->id) }}" class="btn btn-raised btn-primary btn-inline ink-reaction">Edit</a>
                </div>
            </div>
        </div>
    </div>

@endsection