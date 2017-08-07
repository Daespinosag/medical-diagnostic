@extends('template.main')

@section('content')


    <div class="col-md-4">
        <div class="card">
                <div class="card-head card-bordered style-primary">
                    <header><i class="fa fa-fw fa-tag"></i>{{ trans('global.criterion.title.show') }}</header>
                </div>
            <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item">
                        <b>{{trans('validation.attributes.diagnosis')}}</b>
                        <p class="pull-right">{{ $criterion->level->diagnosis->name }}</p>
                    </li>
                    <li class="list-group-item">
                        <b>{{trans('validation.attributes.variable')}}</b>
                        <p class="pull-right">{{ $criterion->variable->name }}</p>
                    </li>
                    <li class="list-group-item">
                        <b>{{trans('validation.attributes.formula')}}</b>
                        <p class="pull-right">{{ $criterion->level->formula }}</p>
                    </li>
                    <li class="list-group-item">
                        <b>{{trans('validation.attributes.comparision_operator')}}</b>
                        <p class="pull-right">{{ $criterion->comparison_operator }}</p>
                    </li>

                    <li class="list-group-item">
                        <b>{{trans('validation.attributes.value_one')}}</b>
                        <p class="pull-right">{{ $criterion->value_1 }}</p>
                    </li>
                    <li class="list-group-item">
                        <b>{{trans('validation.attributes.value_two')}}</b>
                        <p class="pull-right">{{ $criterion->value_2 }}</p>
                    </li>
                    <li class="list-group-item">
                        <b>{{trans('validation.attributes.unit')}}</b>
                        <p class="pull-right">{{ $criterion->unit }}</p>
                    </li>

                </ul>
                <div class="card-actionbar-row">
                    <a href="{{ route('admin.criterion.index') }}" class="btn btn-raised btn-default btn-inline ink-reaction pull-left">{{ trans('global.buttons.return') }}</a>
                    <a href="{{ route('admin.criterion.edit',$criterion->id) }}" class="btn btn-raised btn-primary btn-inline ink-reaction">{{ trans('global.buttons.edit') }}</a>
                </div>
            </div>
        </div>
    </div>

@endsection