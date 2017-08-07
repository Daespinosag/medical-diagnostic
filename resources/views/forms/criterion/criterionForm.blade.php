
<section>
    <div class="form-group {{ $errors->has('level_id') ? ' has-error' : '' }}">
        {!! Form::label('level_id',trans('validation.attributes.level'),['class' => 'col-md-4 control-label', 'for' =>'level']) !!}

        <div class="col-md-6">
            {{ Form::select('level_id',$levels,null,['placeholder' => 'Seleccione el Nivel','class' => 'form-control']) }}
            @if ($errors->has('level_id'))
                <span class="help-block">
                      <strong>{{ $errors->first('level_id') }}</strong>
                 </span>
            @endif
        </div>
    </div>
    <div class="form-group {{ $errors->has('variable_id') ? ' has-error' : '' }}">
        {!! Form::label('variable_id',trans('validation.attributes.variable'),['class' => 'col-md-4 control-label', 'for' =>'variable']) !!}

        <div class="col-md-6">
            {{ Form::select('variable_id',$variables,null,['placeholder' => 'Seleccione la Variable','class' => 'form-control']) }}
            @if ($errors->has('variable_id'))
                <span class="help-block">
                      <strong>{{ $errors->first('variable_id') }}</strong>
                 </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('comparison_operator') ? ' has-error' : '' }}">
        {!! Form::label('comparison_operator',trans('validation.attributes.comparision_operator'),['class' => 'col-md-4 control-label', 'for' =>'comparison operator']) !!}

        <div class="col-md-6">
            {{ Form::select('comparison_operator',['==' => 'igual', '>' => 'mayor', '>=' => 'mayor que','<'=>'menor','<=' => 'menor que','!='=>'diferente','<>' => 'entre'],null,['placeholder' => 'Seleccione el Operador de Comparación','class' => 'form-control']) }}
            @if ($errors->has('comparison_operator'))
                <span class="help-block">
                      <strong>{{ $errors->first('comparison_operator') }}</strong>
                 </span>
            @endif
        </div>
    </div>
    <div class="form-group {{ $errors->has('value_1') ? ' has-error' : '' }}">

        {!! Form::label('value_1',trans('validation.attributes.value_one'),['class' => 'col-md-4 control-label', 'for' =>'value_1']) !!}

        <div class="col-md-6">
            {!! Form::text('value_1', null ,['class' => 'form-control','required']) !!}

            @if ($errors->has('value_1'))
                <span class="help-block">
                <strong>{{ $errors->first('value_1') }}</strong>
            </span>
            @endif
        </div>
    </div>

    <div class="form-group {{ $errors->has('value_2') ? ' has-error' : '' }}">

        {!! Form::label('value_2',trans('validation.attributes.value_two'),['class' => 'col-md-4 control-label', 'for' =>'value_2']) !!}

        <div class="col-md-6">
            {!! Form::text('value_2', null ,['class' => 'form-control','required']) !!}

            @if ($errors->has('value_2'))
                <span class="help-block">
                <strong>{{ $errors->first('value_2') }}</strong>
            </span>
            @endif
        </div>
    </div>

    <div class="form-group {{ $errors->has('unit') ? ' has-error' : '' }}">

        {!! Form::label('unit',trans('validation.attributes.unit'),['class' => 'col-md-4 control-label', 'for' =>'unit']) !!}

        <div class="col-md-6">
            {!! Form::text('unit', null ,['class' => 'form-control','required']) !!}

            @if ($errors->has('unit'))
                <span class="help-block">
                <strong>{{ $errors->first('unit') }}</strong>
            </span>
            @endif
        </div>
    </div>

</section>



