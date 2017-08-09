
<section>
    <div class="form-group {{ $errors->has('username') ? ' has-error' : '' }}">

        {!! Form::label('username', trans('validation.attributes.user-name'),['class' => 'col-md-4 control-label', 'for' =>'username']) !!}

        <div class="col-md-6">
            {!! Form::text('username', null ,['class' => 'form-control','required']) !!}

            @if ($errors->has('username'))
                <span class="help-block">
                <strong>{{ $errors->first('username') }}</strong>
            </span>
            @endif
        </div>
    </div>

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

    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">

        {!! Form::label('email',trans('validation.attributes.email'),['class' => 'col-md-4 control-label', 'for' =>'email']) !!}

        <div class="col-md-6">
            {!! Form::text('email', null ,['class' => 'form-control','required']) !!}

            @if ($errors->has('email'))
                <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
        </div>
    </div>

    <div class="form-group {{ $errors->has('profession') ? ' has-error' : '' }}">

        {!! Form::label('profession',trans('validation.attributes.profession'),['class' => 'col-md-4 control-label', 'for' =>'profession']) !!}

        <div class="col-md-6">
            {!! Form::text('profession', null ,['class' => 'form-control','required']) !!}

            @if ($errors->has('profession'))
                <span class="help-block">
                <strong>{{ $errors->first('profession') }}</strong>
            </span>
            @endif
        </div>
    </div>


    <div class="form-group {{ $errors->has('identification_card') ? ' has-error' : '' }}">

        {!! Form::label('identification_card',trans('validation.attributes.identification-card'),['class' => 'col-md-4 control-label', 'for' =>'identification_card']) !!}

        <div class="col-md-6">
            {!! Form::text('identification_card', null ,['class' => 'form-control','required']) !!}

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
                {{ Form::radio('gender', 'M', true,['chequent' => '']) }}<span>Hombre</span>
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

    <div class="form-group{{ $errors->has('rol_id') ? ' has-error' : '' }}">
        {!! Form::label('rol_id',trans('validation.attributes.roles'),['class' => 'col-md-4 control-label', 'for' =>'rol_id']) !!}

        <div class="col-md-6">
            {{ Form::select('rol_id',$roles,$actualityRoles,['name'=>'rol_id','placeholder' => 'seleccione el rol','class' => 'form-control']) }}
            @if ($errors->has('rol_id'))
                <span class="help-block">
                      <strong>{{ $errors->first('roles') }}</strong>
                 </span>
            @endif
        </div>
    </div>

    @if($method === 'create')

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="col-md-4 control-label">{{ trans('validation.attributes.password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control" name="password" required>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group">
            <label for="password-confirm" class="col-md-4 control-label">{{ trans('validation.attributes.confirm-password') }}</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
            </div>
        </div>

    @endif


</section>



