<!-- Keluhan Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('Keluhan', 'Keluhan:') !!}
    {!! Form::textarea('Keluhan', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Waktu Kapan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('waktu_kapan', 'Waktu Kapan:') !!}
    {!! Form::text('waktu_kapan', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Nilai Mengganggu Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nilai_mengganggu', 'Nilai Mengganggu:') !!}
    {!! Form::text('nilai_mengganggu', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Jadwal Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jadwal_id', 'Jadwal Id:') !!}
    {!! Form::text('jadwal_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Mas Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mas_id', 'Mas Id:') !!}
    {!! Form::text('mas_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Psikolog Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('psikolog_id', 'Psikolog Id:') !!}
    {!! Form::text('psikolog_id', null, ['class' => 'form-control']) !!}
</div>