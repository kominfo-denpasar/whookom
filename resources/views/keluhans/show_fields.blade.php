<!-- Keluhan Field -->
<div class="col-sm-12">
    {!! Form::label('Keluhan', 'Keluhan:') !!}
    <p>{{ $keluhan->keluhan }}</p>
</div>

<!-- Waktu Kapan Field -->
<div class="col-sm-12">
    {!! Form::label('waktu_kapan', 'Waktu Kapan:') !!}
    <p>{{ $keluhan->waktu_kapan }}</p>
</div>

<!-- Nilai Mengganggu Field -->
<div class="col-sm-12">
    {!! Form::label('nilai_mengganggu', 'Nilai Mengganggu:') !!}
    <p>{{ $keluhan->nilai_mengganggu }}</p>
</div>

<!-- Jadwal Id Field -->
<div class="col-sm-12">
    {!! Form::label('jadwal_id', 'Jadwal Id:') !!}
    <p>{{ $keluhan->jadwal_id }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $keluhan->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $keluhan->updated_at }}</p>
</div>

