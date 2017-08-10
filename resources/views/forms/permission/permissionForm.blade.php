
<section>
    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">

        {!! Form::label('name',trans('validation.attributes.key-name'),['class' => 'col-md-4 control-label', 'for' =>'name']) !!}

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

        {!! Form::label('display_name',trans('validation.attributes.complete-name'),['class' => 'col-md-4 control-label', 'for' =>'display_name']) !!}

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

        {!! Form::label('description',trans('validation.attributes.description'),['class' => 'col-md-4 control-label', 'for' =>'description']) !!}

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


