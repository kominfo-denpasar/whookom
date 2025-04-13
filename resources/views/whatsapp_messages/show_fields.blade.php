<!-- Message Id Field -->
<div class="col-sm-12">
    {!! Form::label('message_id', 'Message Id:') !!}
    <p>{{ $whatsappMessages->message_id }}</p>
</div>

<!-- From Field -->
<div class="col-sm-12">
    {!! Form::label('from', 'From:') !!}
    <p>{{ $whatsappMessages->from }}</p>
</div>

<!-- Pushname Field -->
<div class="col-sm-12">
    {!! Form::label('pushname', 'Pushname:') !!}
    <p>{{ $whatsappMessages->pushname }}</p>
</div>

<!-- Type Field -->
<div class="col-sm-12">
    {!! Form::label('type', 'Type:') !!}
    <p>{{ $whatsappMessages->type }}</p>
</div>

<!-- Content Field -->
<div class="col-sm-12">
    {!! Form::label('content', 'Content:') !!}
    <p>{{ $whatsappMessages->content }}</p>
</div>

<!-- Caption Field -->
<div class="col-sm-12">
    {!! Form::label('caption', 'Caption:') !!}
    <p>{{ $whatsappMessages->caption }}</p>
</div>

<!-- Mime Type Field -->
<div class="col-sm-12">
    {!! Form::label('mime_type', 'Mime Type:') !!}
    <p>{{ $whatsappMessages->mime_type }}</p>
</div>

<!-- Is Group Field -->
<div class="col-sm-12">
    {!! Form::label('is_group', 'Is Group:') !!}
    <p>{{ $whatsappMessages->is_group }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $whatsappMessages->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $whatsappMessages->updated_at }}</p>
</div>

