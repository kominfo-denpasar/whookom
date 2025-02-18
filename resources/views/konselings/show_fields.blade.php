<!-- Hasil Field -->
<div class="col-sm-12">
    {!! Form::label('hasil', 'Hasil:') !!}
    <p>{{ $konseling->hasil }}</p>
</div>

<!-- Kesimpulan Field -->
<div class="col-sm-12">
    {!! Form::label('kesimpulan', 'Kesimpulan:') !!}
    <p>{{ $konseling->kesimpulan }}</p>
</div>

<!-- Saran Field -->
<div class="col-sm-12">
    {!! Form::label('saran', 'Saran:') !!}
    <p>{{ $konseling->saran }}</p>
</div>

<!-- Berkas Pendukung Field -->
<div class="col-sm-12">
    {!! Form::label('berkas_pendukung', 'Berkas Pendukung:') !!}
    <p>{{ $konseling->berkas_pendukung }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $konseling->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $konseling->updated_at }}</p>
</div>

