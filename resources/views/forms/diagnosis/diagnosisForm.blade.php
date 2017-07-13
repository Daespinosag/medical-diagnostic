
<section>
    <div class="form-group {{ $errors->has('type_diagnosis_id') ? ' has-error' : '' }}">

        {!! Form::label('type_diagnosis_id','Type Diagnosis',['class' => 'col-md-4 control-label', 'for' =>'Type Diagnosis']) !!}

        <div class="col-md-6">
            {!! Form::select('type_diagnosis_id',$typesDiagnostics , null ,['class' => 'form-control','required','placeholder' => 'select type diagnosis']) !!}

            @if ($errors->has('type_diagnosis_id'))
                <span class="help-block">
                <strong>{{ $errors->first('type_diagnosis_id') }}</strong>
            </span>
            @endif
        </div>
    </div>

    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">

        {!! Form::label('name','Name',['class' => 'col-md-4 control-label', 'for' =>'name']) !!}

        <div class="col-md-6">
            {!! Form::text('name', null ,['class' => 'form-control','required']) !!}

            @if ($errors->has('name'))
                <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
            @endif
        </div>
    </div>

    <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">

        {!! Form::label('description','Description',['class' => 'col-md-4 control-label', 'for' =>'description']) !!}

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
