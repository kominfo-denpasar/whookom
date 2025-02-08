<!-- Tgl Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tgl', 'Tgl:') !!}
    {!! Form::text('tgl', null, ['class' => 'form-control','id'=>'tgl']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#tgl').datepicker()
    </script>
@endpush

<!-- Jam Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jam', 'Jam:') !!}
    {!! Form::text('jam', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Kuota Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kuota', 'Kuota:') !!}
    {!! Form::number('kuota', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Psikolog Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('psikolog_id', 'Psikolog Id:') !!}
    {!! Form::text('psikolog_id', null, ['class' => 'form-control']) !!}
</div>