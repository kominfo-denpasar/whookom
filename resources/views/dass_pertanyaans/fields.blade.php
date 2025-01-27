<!-- Pertanyaan Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('pertanyaan', 'Pertanyaan:') !!}
    {!! Form::textarea('pertanyaan', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Kode Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kode', 'Kode:') !!}
    {!! Form::select('kode', ['Depression' => 'Depression', 'Anxiety' => 'Anxiety', 'Stress' => 'Stress'], null, ['class' => 'form-control custom-select']) !!}
</div>