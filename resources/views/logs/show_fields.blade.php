<!-- Log Name Field -->
<div class="col-sm-12">
    {!! Form::label('log_name', 'Log Name:') !!}
    <p>{{ $log->log_name }}</p>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $log->description }}</p>
</div>

<!-- Subject Type Field -->
<div class="col-sm-12">
    {!! Form::label('subject_type', 'Subject Type:') !!}
    <p>{{ $log->subject_type }}</p>
</div>

<!-- Event Field -->
<div class="col-sm-12">
    {!! Form::label('event', 'Event:') !!}
    <p>{{ $log->event }}</p>
</div>

<!-- Subject Id Field -->
<div class="col-sm-12">
    {!! Form::label('subject_id', 'Subject Id:') !!}
    <p>{{ $log->subject_id }}</p>
</div>

<!-- Causer Type Field -->
<div class="col-sm-12">
    {!! Form::label('causer_type', 'Causer Type:') !!}
    <p>{{ $log->causer_type }}</p>
</div>

<!-- Causer Id Field -->
<div class="col-sm-12">
    {!! Form::label('causer_id', 'Causer Id:') !!}
    <p>{{ $log->causer_id }}</p>
</div>

<!-- Properties Field -->
<div class="col-sm-12">
    {!! Form::label('properties', 'Properties:') !!}
    <p>{{ $log->properties }}</p>
</div>

<!-- Batch Uuid Field -->
<div class="col-sm-12">
    {!! Form::label('batch_uuid', 'Batch Uuid:') !!}
    <p>{{ $log->batch_uuid }}</p>
</div>

