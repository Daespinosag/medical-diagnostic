@extends('template.globalCard')


@section('headerCard')
    <div class="card-head">
        <header class="text-primary-dark">{{ trans('global.level.title.edit') }}</header>
    </div>
@endsection


@section('bodyCard')
    <div>
        <update-level
            :level="{{ json_encode($level) }}"
            :criterionlist="{{ json_encode($criterionList) }}"
        >
        </update-level>
    </div>
@endsection

@section('javascript')

@endsection