
<section>
    <div class="form-group {{ $errors->has('username') ? ' has-error' : '' }}">

        {!! Form::label('username','Username',['class' => 'col-md-4 control-label', 'for' =>'username']) !!}

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

    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">

        {!! Form::label('email','Email',['class' => 'col-md-4 control-label', 'for' =>'email']) !!}

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

        {!! Form::label('profession','Profession',['class' => 'col-md-4 control-label', 'for' =>'profession']) !!}

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

        {!! Form::label('identification_card','Identification Card',['class' => 'col-md-4 control-label', 'for' =>'identification_card']) !!}

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
    @if($method === 'create')

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="col-md-4 control-label">Password</label>

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
            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
            </div>
        </div>

    @endif

    <div class="form-group{{ $errors->has('roles') ? ' has-error' : '' }}">
        {!! Form::label('roles','Roles',['class' => 'col-md-4 control-label', 'for' =>'roles']) !!}

        <div class="form-control">
            {{ Form::select('roles',$roles,$actualityRoles,['multiple' => 'multiple','name'=>'roles[]','placeholder' => 'selected roles','class' => '']) }}
            @if ($errors->has('roles'))
                <span class="help-block">
                      <strong>{{ $errors->first('roles') }}</strong>
                 </span>
            @endif
        </div>
    </div>

</section>



