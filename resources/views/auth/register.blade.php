@extends('template.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    {!! Form::open(['route'=> 'register','method'=> 'POST', 'class'=> 'form-horizontal form-validate floating-label','novalidate'=>'novalidate']) !!}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

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

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
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


                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('identification_card') ? ' has-error' : '' }}">
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
                                {!! Form::select('gender', ['M' => 'Male','F'=>'Female','O' =>'Other'] ,['class' => 'form-control','required']) !!}
                                @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

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

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
