
<section>
    <div class="form-group{{ $errors->has('patient_id') ? ' has-error' : '' }}">
        {!! Form::label('patient_id','Patient',['class' => 'col-md-4 control-label', 'for' =>'patient']) !!}

        <div class="col-md-6">
            {{ Form::select('patient_id',$patients,' ',['placeholder' => 'selected patient','class' => 'form-control']) }}
            @if ($errors->has('patient_id'))
                <span class="help-block">
                      <strong>{{ $errors->first('patient_id') }}</strong>
                 </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('variable_id') ? ' has-error' : '' }}">
        {!! Form::label('variable_id','Variable',['class' => 'col-md-4 control-label', 'for' =>'variable']) !!}

        <div class="col-md-6">
            {{ Form::select('variable_id',$variables,' ',['placeholder' => 'selected variable','class' => 'form-control']) }}
            @if ($errors->has('variable_id'))
                <span class="help-block">
                      <strong>{{ $errors->first('variable_id') }}</strong>
                 </span>
            @endif
        </div>
    </div>

    <div class="form-group {{ $errors->has('value') ? ' has-error' : '' }}">

        {!! Form::label('value','Value',['class' => 'col-md-4 control-label', 'for' =>'value']) !!}

        <div class="col-md-6">
            {!! Form::text('value', null ,['class' => 'form-control','required']) !!}

            @if ($errors->has('value'))
                <span class="help-block">
                <strong>{{ $errors->first('value') }}</strong>
            </span>
            @endif
        </div>
    </div>

    <div class="form-group {{ $errors->has('completed_date') ? ' has-error' : '' }}">

        {!! Form::label('completed_date','Completed Date',['class' => 'col-md-4 control-label', 'for' =>'completed date']) !!}

        <div class="col-md-6">
            {!! Form::date('completed_date', null ,['class' => 'form-control','required']) !!}

            @if ($errors->has('completed_date'))
                <span class="help-block">
                <strong>{{ $errors->first('completed_date') }}</strong>
            </span>
            @endif
        </div>
    </div>


</section>



