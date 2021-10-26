<x-editor />

<div class="form-group">

    {!! Form::label('name', __('Name'), ['class' => 'col-md-2 col-sm-2 control-label']) !!}
    <div class="col-md-4 col-sm-4 {{ $errors->has('product_name') ? 'has-error' : ''}}">
        {!! Form::text('product_name', null, ['class' => 'form-control']) !!}
        {!! $errors->first('product_name', '<p class="help-block">:message</p>') !!}
    </div>

    {!! Form::label('name', __('SKU'), ['class' => 'col-md-2 col-sm-2 control-label']) !!}
    <div class="col-md-4 col-sm-4 {{ $errors->has('product_sku') ? 'has-error' : ''}}">
        {!! Form::text('product_sku', null, ['class' => 'form-control']) !!}
        {!! $errors->first('product_sku', '<p class="help-block">:message</p>') !!}
    </div>

</div>

<div class="form-group">

    {!! Form::label('name', __('Category'), ['class' => 'col-md-2 col-sm-2 control-label']) !!}
    <div class="col-md-4 col-sm-4 {{ $errors->has('product_category_id') ? 'has-error' : ''}}">
        {{ Form::select('product_category_id', $category, null, ['class'=> 'form-control ']) }}
        {!! $errors->first('product_category_id', '<p class="help-block">:message</p>') !!}
    </div>

    {!! Form::label('name', __('Image'), ['class' => 'col-md-2 col-sm-2 control-label']) !!}
    <div class="col-md-4 col-sm-4" {{ $errors->has('product_image') ? 'has-error' : ''}}">
        <input type="hidden" value="{{ $model->product_image ?? null }}" name="product_image">
        <input type="file" name="file"
            class="{{ $errors->has('product_image') ? 'has-error' : ''}} btn btn-default btn-sm btn-block">
        {!! $errors->first('product_image', '<p class="help-block">:message</p>') !!}
    </div>

</div>

<div class="form-group">
  
    {!! Form::label('name', __('Description'), ['class' => 'col-md-2 col-sm-2 control-label']) !!}
    <div class="col-md-10 col-sm-10">
        {!! Form::textarea('product_description', null, ['class' => 'form-control simple', 'rows' => '3']) !!}
    </div>

</div>