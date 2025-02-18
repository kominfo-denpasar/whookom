<!-- Hasil Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('hasil', 'Hasil:') !!}
    {!! Form::textarea('hasil', null, ['class' => 'form-control']) !!}
</div>

<!-- Kesimpulan Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('kesimpulan', 'Kesimpulan:') !!}
    {!! Form::textarea('kesimpulan', null, ['class' => 'form-control']) !!}
</div>

<!-- Saran Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('saran', 'Saran:') !!}
    {!! Form::textarea('saran', null, ['class' => 'form-control']) !!}
</div>

<!-- Berkas Pendukung Field -->
<div class="form-group col-sm-6">
    {!! Form::label('berkas_pendukung', 'Berkas Pendukung:') !!}
    <div class="input-group">
        <div class="custom-file">
            {!! Form::file('berkas_pendukung', ['class' => 'custom-file-input']) !!}
            {!! Form::label('berkas_pendukung', 'Choose file', ['class' => 'custom-file-label']) !!}
        </div>
    </div>
</div>
<div class="clearfix"></div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control']) !!}
</div>

<!-- Psikolog Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('psikolog_id', 'Psikolog Id:') !!}
    {!! Form::text('psikolog_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Mas Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mas_id', 'Mas Id:') !!}
    {!! Form::text('mas_id', null, ['class' => 'form-control']) !!}
</div>