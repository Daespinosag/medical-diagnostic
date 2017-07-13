
<section>
    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">

        {!! Form::label('name','Key Name',['class' => 'col-md-4 control-label', 'for' =>'name']) !!}

        <div class="col-md-6">
            {!! Form::text('name', null ,['class' => 'form-control','required']) !!}

            @if ($errors->has('name'))
                <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
            @endif
        </div>
    </div>

    <div class="form-group {{ $errors->has('display_name') ? ' has-error' : '' }}">

        {!! Form::label('display_name','Complete Name',['class' => 'col-md-4 control-label', 'for' =>'display_name']) !!}

        <div class="col-md-6">
            {!! Form::text('display_name', null ,['class' => 'form-control','required']) !!}

            @if ($errors->has('display_name'))
                <span class="help-block">
                <strong>{{ $errors->first('display_name') }}</strong>
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


