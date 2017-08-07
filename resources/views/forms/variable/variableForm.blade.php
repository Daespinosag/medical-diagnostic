
<section>
    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">

        {!! Form::label('name',trans('validation.attributes.name'),['class' => 'col-md-4 control-label', 'for' =>'name']) !!}

        <div class="col-md-6">
            {!! Form::text('name', null ,['class' => 'form-control','required']) !!}

            @if ($errors->has('name'))
                <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
            @endif
        </div>
    </div>
    <div class="form-group {{ $errors->has('json_name') ? ' has-error' : '' }}">

        {!! Form::label('json_name',trans('validation.attributes.json_name'),['class' => 'col-md-4 control-label', 'for' =>'json_name']) !!}

        <div class="col-md-6">
            {!! Form::text('json_name', null ,['class' => 'form-control','required']) !!}

            @if ($errors->has('json_name'))
                <span class="help-block">
                <strong>{{ $errors->first('json_name') }}</strong>
            </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('calculated') ? ' has-error' : '' }}">
        {!! Form::label('calculated',trans('validation.attributes.calculated'),['class' => 'col-md-4 control-label', 'for' =>'gender']) !!}

        <div class="col-md-6">
            <label class="radio-inline radio-styled">
                {{ Form::radio('calculated', true, true) }}<span>Si</span>
            </label>
            <label class="radio-inline radio-styled">
                {{ Form::radio('calculated', false, true,['chequent' => '']) }}<span>No</span>
            </label>
            @if ($errors->has('gender'))
                <span class="help-block">
                      <strong>{{ $errors->first('gender') }}</strong>
                 </span>
            @endif
        </div>
    </div>

    <div class="form-group {{ $errors->has('calculation_operation') ? ' has-error' : '' }}">

        {!! Form::label('calculation_operation',trans('validation.attributes.calculation_operation'),['class' => 'col-md-4 control-label', 'for' =>'calculation_operation']) !!}

        <div class="col-md-6">
            {!! Form::text('calculation_operation', null ,['class' => 'form-control','required']) !!}

            @if ($errors->has('calculation_operation'))
                <span class="help-block">
                <strong>{{ $errors->first('calculation_operation') }}</strong>
            </span>
            @endif
        </div>
    </div>

    <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">

        {!! Form::label('description',trans('validation.attributes.description'),['class' => 'col-md-4 control-label', 'for' =>'description']) !!}

        <div class="col-md-6">
            {!! Form::textarea('description', null ,['class' => 'form-control','required']) !!}

            @if ($errors->has('description'))
                <span class="help-block">
                <strong>{{ $errors->first('description') }}</strong>
            </span>
            @endif
        </div>
    </div>

</section>


