@extends('template.globalCard')


@section('headerCard')
    <div class="card-head">
        <header class="text-primary-dark">{{ trans('global.criterion.title.edit') }}</header>
    </div>
@endsection


@section('bodyCard')

    <div class="col-lg-8 col-lg-offset-2">
        {!! Form::model($criterion,['route'=> ['admin.criterion.update',$criterion],'method'=> 'PUT', 'class'=> 'form-horizontal form-validate floating-label', 'novalidate'=>'novalidate']) !!}

            @include('forms.criterion.criterionForm')

            <div class="card-actionbar-row">
                <a href="{{ route('admin.criterion.index') }}" class="btn btn-raised btn-default btn-inline ink-reaction">{{ trans('global.buttons.cancel') }}</a>
                <button type="submit" class="btn btn-raised btn-primary btn-inline ink-reaction">{{ trans('global.buttons.save') }}</button>
            </div>

        {!! Form::close() !!}
    </div>

@endsection