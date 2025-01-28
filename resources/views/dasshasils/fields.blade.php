<!-- Mas Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mas_id', 'Mas Id:') !!}
    {!! Form::text('mas_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Nilai D Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nilai_d', 'Nilai D:') !!}
    {!! Form::number('nilai_d', null, ['class' => 'form-control']) !!}
</div>

<!-- Nilai S Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nilai_s', 'Nilai S:') !!}
    {!! Form::number('nilai_s', null, ['class' => 'form-control']) !!}
</div>

<!-- Nilai A Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nilai_a', 'Nilai A:') !!}
    {!! Form::number('nilai_a', null, ['class' => 'form-control']) !!}
</div>

<!-- Hasil Akhir Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hasil_akhir', 'Hasil Akhir:') !!}
    {!! Form::text('hasil_akhir', null, ['class' => 'form-control']) !!}
</div>