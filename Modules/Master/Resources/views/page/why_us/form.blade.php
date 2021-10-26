<div class="form-group">

    {!! Form::label('name', __('Name'), ['class' => 'col-md-2 col-sm-2 control-label']) !!}
    <div class="col-md-4 col-sm-4 {{ $errors->has('why_us_name') ? 'has-error' : ''}}">
        {!! Form::text('why_us_name', null, ['class' => 'form-control']) !!}
        {!! $errors->first('why_us_name', '<p class="help-block">:message</p>') !!}
    </div>

    {!! Form::label('name', __('Description'), ['class' => 'col-md-2 col-sm-2 control-label']) !!}
    <div class="col-md-4 col-sm-4">
        {!! Form::textarea('why_us_description', null, ['class' => 'form-control', 'rows' => '3']) !!}
    </div>

</div>