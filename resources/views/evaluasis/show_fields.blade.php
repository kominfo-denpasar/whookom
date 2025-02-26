<!-- Nilai Layanan Field -->
<div class="col-sm-12">
    {!! Form::label('nilai_layanan', 'Nilai Layanan:') !!}
    <p>{{ $evaluasi->nilai_layanan }}</p>
</div>

<!-- Nilai Keluhan Field -->
<div class="col-sm-12">
    {!! Form::label('nilai_keluhan', 'Nilai Keluhan:') !!}
    <p>{{ $evaluasi->nilai_keluhan }}</p>
</div>

<!-- Rekomendasi Field -->
<div class="col-sm-12">
    {!! Form::label('rekomendasi', 'Rekomendasi:') !!}
    <p>{{ $evaluasi->rekomendasi }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $evaluasi->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $evaluasi->updated_at }}</p>
</div>

