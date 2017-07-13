
<section>
    <div class="form-group {{ $errors->has('diagnosis_id') ? ' has-error' : '' }}">

        {!! Form::label('diagnosis_id','Diagnosis',['class' => 'col-md-4 control-label', 'for' =>'Diagnosis']) !!}

        <div class="col-md-6">
            {!! Form::select('diagnosis_id',$diagnosis , null ,['class' => 'form-control','required','placeholder' => 'select diagnosis']) !!}

            @if ($errors->has('diagnosis_id'))
                <span class="help-block">
                <strong>{{ $errors->first('diagnosis_id') }}</strong>
            </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
        {!! Form::label('gender','Gender',['class' => 'col-md-4 control-label', 'for' =>'gender']) !!}

        <div class="col-md-6">
            <label class="radio-inline radio-styled">
                {{ Form::radio('gender', 'M', true) }}<span>Male</span>
            </label>
            <label class="radio-inline radio-styled">
                {{ Form::radio('gender', 'F', true,['chequent' => '']) }}<span>Female</span>
            </label>
            @if ($errors->has('gender'))
                <span class="help-block">
                      <strong>{{ $errors->first('gender') }}</strong>
                 </span>
            @endif
        </div>
    </div>

    <div class="form-group {{ $errors->has('formula') ? ' has-error' : '' }}">

        {!! Form::label('formula','Formula',['class' => 'col-md-4 control-label', 'for' =>'Formula']) !!}

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

        {!! Form::label('response','Response',['class' => 'col-md-4 control-label', 'for' =>'response']) !!}

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
