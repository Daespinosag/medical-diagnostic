
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

    <div class="form-group{{ $errors->has('permission_role') ? ' has-error' : '' }}">
        {!! Form::label('permission_role',trans('validation.attributes.permission'),['class' => 'col-md-4 control-label', 'for' =>'permission_role']) !!}

        <div class="form-control">
            {{ Form::select('permission_role',$permission,$actualityPermission,['multiple' => 'multiple','name'=>'permission_role[]','placeholder' => 'selected permissions','class' => '']) }}
            @if ($errors->has('permission_role'))
                <span class="help-block">
                      <strong>{{ $errors->first('permission_role') }}</strong>
                 </span>
            @endif
        </div>
    </div>

</section>



