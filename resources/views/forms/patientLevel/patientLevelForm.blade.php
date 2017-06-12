
<section>
    <div class="form-group{{ $errors->has('level_id') ? ' has-error' : '' }}">
        {!! Form::label('level_id','Level',['class' => 'col-md-4 control-label', 'for' =>'level']) !!}

        <div class="col-md-6">
            {{ Form::select('level_id',$levels,' ',['placeholder' => 'selected level','class' => 'form-control']) }}
            @if ($errors->has('level_id'))
                <span class="help-block">
                      <strong>{{ $errors->first('level_id') }}</strong>
                 </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('patient_id') ? ' has-error' : '' }}">
        {!! Form::label('patient_id','Patient',['class' => 'col-md-4 control-label', 'for' =>'patient']) !!}

        <div class="col-md-6">
            {{ Form::select('patient_id',$patients,' ',['placeholder' => 'selected variable','class' => 'form-control']) }}
            @if ($errors->has('patient_id'))
                <span class="help-block">
                      <strong>{{ $errors->first('patient_id') }}</strong>
                 </span>
            @endif
        </div>
    </div>
    <div class="form-group {{ $errors->has('diagnosis_date') ? ' has-error' : '' }}">

        {!! Form::label('diagnosis_date','Diagnosis Date',['class' => 'col-md-4 control-label', 'for' =>'Diagnosis date']) !!}

        <div class="col-md-6">
            {!! Form::date('diagnosis_date', null ,['class' => 'form-control','required']) !!}

            @if ($errors->has('diagnosis_date'))
                <span class="help-block">
                <strong>{{ $errors->first('diagnosis_date') }}</strong>
            </span>
            @endif
        </div>
    </div>



</section>

