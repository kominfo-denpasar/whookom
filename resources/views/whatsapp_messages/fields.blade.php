<!-- Message Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('message_id', 'Message Id:') !!}
    {!! Form::text('message_id', null, ['class' => 'form-control']) !!}
</div>

<!-- From Field -->
<div class="form-group col-sm-6">
    {!! Form::label('from', 'From:') !!}
    {!! Form::text('from', null, ['class' => 'form-control']) !!}
</div>

<!-- Pushname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pushname', 'Pushname:') !!}
    {!! Form::text('pushname', null, ['class' => 'form-control']) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-12">
    {!! Form::label('type', 'Type', ['class' => 'form-check-label']) !!}
    <label class="form-check">
        {!! Form::radio('type', "text", null, ['class' => 'form-check-input']) !!} text
    </label>
    <label class="form-check">
        {!! Form::radio('type', "image", null, ['class' => 'form-check-input']) !!} image
    </label>
    <label class="form-check">
        {!! Form::radio('type', "document", null, ['class' => 'form-check-input']) !!} document
    </label>
</div>

<!-- Content Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('content', 'Content:') !!}
    {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
</div>

<!-- Caption Field -->
<div class="form-group col-sm-6">
    {!! Form::label('caption', 'Caption:') !!}
    {!! Form::text('caption', null, ['class' => 'form-control']) !!}
</div>

<!-- Mime Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mime_type', 'Mime Type:') !!}
    {!! Form::text('mime_type', null, ['class' => 'form-control']) !!}
</div>

<!-- Is Group Field -->
<div class="form-group col-sm-12">
    {!! Form::label('is_group', 'Is Group', ['class' => 'form-check-label']) !!}
    <label class="form-check">
        {!! Form::radio('is_group', "1", null, ['class' => 'form-check-input']) !!} Group
    </label>
    <label class="form-check">
        {!! Form::radio('is_group', "0", null, ['class' => 'form-check-input']) !!} Personal
    </label>
</div>