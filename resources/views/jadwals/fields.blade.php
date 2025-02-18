<!-- Tgl Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tgl', 'Tgl:') !!}
    {!! Form::text('tgl', null, ['class' => 'form-control', 'id'=>'tgl', 'autocomplete'=>'off']) !!}
</div>

@push('page_scripts')
<!-- <script type="module">        
    $(document).ready(function() {
        $('#tgl').datepicker()
    })
</script> -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
<script src="//code.jquery.com/jquery-3.6.0.js"></script>
<script src="//code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
<script type="text/javascript">
    $('#tgl').datepicker()
</script>
@endpush

<!-- Jam Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jam', 'Jam:') !!}
    {!! Form::time('jam', null, ['class' => 'form-control', 'required']) !!}
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