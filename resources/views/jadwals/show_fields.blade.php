<!-- Tgl Field -->
<div class="col-sm-12">
    {!! Form::label('tgl', 'Tgl:') !!}
    <p>{{ $jadwal->tgl }}</p>
</div>

<!-- Jam Field -->
<div class="col-sm-12">
    {!! Form::label('jam', 'Jam:') !!}
    <p>{{ $jadwal->jam }}</p>
</div>

<!-- Kuota Field -->
<div class="col-sm-12">
    {!! Form::label('kuota', 'Kuota:') !!}
    <p>{{ $jadwal->kuota }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $jadwal->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $jadwal->updated_at }}</p>
</div>

