
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

    <div class="form-group {{ $errors->has('last_name_1') ? ' has-error' : '' }}">

        {!! Form::label('last_name_1',trans('validation.attributes.last-name-one'),['class' => 'col-md-4 control-label', 'for' =>'last_name_1']) !!}

        <div class="col-md-6">
            {!! Form::text('last_name_1', null ,['class' => 'form-control','required']) !!}

            @if ($errors->has('last_name_1'))
                <span class="help-block">
                <strong>{{ $errors->first('last_name_1') }}</strong>
            </span>
            @endif
        </div>
    </div>

    <div class="form-group {{ $errors->has('last_name_2') ? ' has-error' : '' }}">

        {!! Form::label('last_name_2',trans('validation.attributes.last-name-two'),['class' => 'col-md-4 control-label', 'for' =>'last_name_2']) !!}

        <div class="col-md-6">
            {!! Form::text('last_name_2', null ,['class' => 'form-control']) !!}

            @if ($errors->has('last_name_2'))
                <span class="help-block">
                <strong>{{ $errors->first('last_name_2') }}</strong>
            </span>
            @endif
        </div>
    </div>

    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">

        {!! Form::label('email',trans('validation.attributes.email'),['class' => 'col-md-4 control-label', 'for' =>'email']) !!}

        <div class="col-md-6">
            {!! Form::email('email', null ,['class' => 'form-control','required']) !!}

            @if ($errors->has('email'))
                <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
        </div>
    </div>

    <div class="form-group {{ $errors->has('identification_card') ? ' has-error' : '' }}">

        {!! Form::label('identification_card',trans('validation.attributes.identification-card'),['class' => 'col-md-4 control-label', 'for' =>'identification_card']) !!}

        <div class="col-md-6">
            {!! Form::number('identification_card', null ,['class' => 'form-control','required']) !!}

            @if ($errors->has('identification_card'))
                <span class="help-block">
                <strong>{{ $errors->first('identification_card') }}</strong>
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
            @if ($errors->has('gender'))
                <span class="help-block">
                      <strong>{{ $errors->first('gender') }}</strong>
                 </span>
            @endif
        </div>
    </div>

</section>
