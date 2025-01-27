<!-- Nik Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nik', 'Nik:') !!}
    {!! Form::text('nik', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Nama Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama', 'Nama:') !!}
    {!! Form::text('nama', null, ['class' => 'form-control']) !!}
</div>

<!-- JK Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jk', 'JK:') !!}
    {!! Form::select('jk', ['L' => 'L', 'P' => 'P'], null, ['class' => 'form-control custom-select']) !!}
</div>

<!-- Tgl Lahir Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tgl_lahir', 'Tgl Lahir:') !!}
    {!! Form::date('tgl_lahir', null, ['class' => 'form-control','id'=>'tgl_lahir']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#tgl_lahir').datepicker()
    </script>
@endpush

<!-- Alamat Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('alamat', 'Alamat:') !!}
    {!! Form::textarea('alamat', null, ['class' => 'form-control']) !!}
</div>

<!-- Hp Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hp', 'Hp:') !!}
    {!! Form::text('hp', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Hp Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Desa Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('desa_id', 'Desa Id:') !!}
    {!! Form::number('desa_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Kec Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kec_id', 'Kec Id:') !!}
    {!! Form::number('kec_id', null, ['class' => 'form-control']) !!}
</div>

<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>