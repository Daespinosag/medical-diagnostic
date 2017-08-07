
<section>
    <div class="form-group {{ $errors->has('diagnosis_id') ? ' has-error' : '' }}">

        {!! Form::label('diagnosis_id',trans('validation.attributes.diagnosis'),['class' => 'col-md-4 control-label', 'for' =>'Diagnosis']) !!}

        <div class="col-md-6">
            {!! Form::select('diagnosis_id',$diagnosis , null ,['class' => 'form-control','required','placeholder' => 'Seleccione Un Diagnóstico']) !!}

            @if ($errors->has('diagnosis_id'))
                <span class="help-block">
                <strong>{{ $errors->first('diagnosis_id') }}</strong>
            </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
        {!! Form::label('gender',trans('validation.attributes.gender'),['class' => 'col-md-4 control-label', 'for' =>'gender']) !!}

        <div class="col-md-6">
            <label class="radio-inline radio-styled">
                {{ Form::radio('gender', 'M', true) }}<span>Hombre</span>
            </label>
            <label class="radio-inline radio-styled">
                {{ Form::radio('gender', 'F', true,['chequent' => '']) }}<span>Mujer</span>
            </label>
            <label class="radio-inline radio-styled">
                {{ Form::radio('gender', 'ALL', true,['chequent' => '']) }}<span>Unisex</span>
            </label>
            @if ($errors->has('gender'))
                <span class="help-block">
                      <strong>{{ $errors->first('gender') }}</strong>
                 </span>
            @endif
        </div>
    </div>

    <div class="form-group {{ $errors->has('formula') ? ' has-error' : '' }}">

        {!! Form::label('formula',trans('validation.attributes.formula'),['class' => 'col-md-4 control-label', 'for' =>'Formula']) !!}

        <div class="col-md-6">
            {!! Form::text('formula', null ,['class' => 'form-control','required']) !!}

            @if ($errors->has('formula'))
                <span class="help-block">
                <strong>{{ $errors->first('formula') }}</strong>
            </span>
            @endif
        </div>
    </div>

    <div class="form-group {{ $errors->has('response') ? ' has-error' : '' }}">

        {!! Form::label('response',trans('validation.attributes.response'),['class' => 'col-md-4 control-label', 'for' =>'response']) !!}

        <div class="col-md-6">
            {!! Form::text('response', null ,['class' => 'form-control','required']) !!}

            @if ($errors->has('response'))
                <span class="help-block">
                <strong>{{ $errors->first('response') }}</strong>
            </span>
            @endif
        </div>
    </div>

</section>
