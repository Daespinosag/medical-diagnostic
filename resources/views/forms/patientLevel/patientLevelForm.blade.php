
<section>
    <div class="form-group{{ $errors->has('level_id') ? ' has-error' : '' }}">
        {!! Form::label('level_id',trans('validation.attributes.level'),['class' => 'col-md-4 control-label', 'for' =>'level']) !!}

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
        {!! Form::label('patient_id',trans('validation.attributes.patient'),['class' => 'col-md-4 control-label', 'for' =>'patient']) !!}

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

        {!! Form::label('diagnosis_date',trans('validation.attributes.diagnosis_date'),['class' => 'col-md-4 control-label', 'for' =>'Diagnosis date']) !!}

        <div class="col-md-6">
            {!! Form::date('diagnosis_date', null ,['class' => 'form-control','required']) !!}

            @if ($errors->has('diagnosis_date'))
                <span class="help-block">
                <strong>{{ $errors->first('diagnosis_date') }}</strong>
            </span>
            @endif
        </div>
    </div>

    <div class="form-group {{ $errors->has('medical_case') ? ' has-error' : '' }}">

        {!! Form::label('medical_case',trans('validation.attributes.medical_case'),['class' => 'col-md-4 control-label', 'for' =>'medical_case']) !!}

        <div class="col-md-6">
            {!! Form::number('medical_case', null ,['class' => 'form-control','required']) !!}

            @if ($errors->has('medical_case'))
                <span class="help-block">
                <strong>{{ $errors->first('medical_case') }}</strong>
            </span>
            @endif
        </div>
    </div>



</section>

