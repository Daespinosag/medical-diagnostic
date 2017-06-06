@extends('template.globalCard')


@section('headerCard')
    <div class="card-head">
        <header class="text-primary-dark">Edit Variable</header>
    </div>
@endsection


@section('bodyCard')

    <div class="col-lg-8 col-lg-offset-2">
        {!! Form::model($variable,['route'=> ['admin.variable.update',$variable],'method'=> 'PUT', 'class'=> 'form-horizontal form-validate floating-label', 'novalidate'=>'novalidate']) !!}

            @include('forms.variable.variableForm')

            <div class="card-actionbar-row">
                <a href="{{ route('admin.variable.index') }}" class="btn btn-raised btn-default btn-inline ink-reaction">Cancel</a>
                <button type="submit" class="btn btn-raised btn-primary btn-inline ink-reaction">Save</button>
            </div>

        {!! Form::close() !!}
    </div>

@endsection

@section('javascript')

@endsection