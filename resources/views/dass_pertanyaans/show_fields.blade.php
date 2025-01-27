<!-- Pertanyaan Field -->
<div class="col-sm-12">
    {!! Form::label('pertanyaan', 'Pertanyaan:') !!}
    <p>{{ $dassPertanyaan->pertanyaan }}</p>
</div>

<!-- Kode Field -->
<div class="col-sm-12">
    {!! Form::label('kode', 'Kode:') !!}
    <p>{{ $dassPertanyaan->kode }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $dassPertanyaan->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $dassPertanyaan->updated_at }}</p>
</div>

