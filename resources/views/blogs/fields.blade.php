<!-- Judul Field -->
<div class="form-group col-sm-6">
    {!! Form::label('judul', 'Judul:') !!}
    {!! Form::text('judul', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Deskripsi Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('deskripsi', 'Deskripsi:') !!}
    {!! Form::textarea('deskripsi', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Gambar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gambar', 'Gambar:') !!}
    <div class="input-group">
        @if($blog && $blog->gambar)
            <!-- cek apakah file ada di folder -->
            @if(file_exists(storage_path('app/public/uploads/blog/'.$blog->gambar)))
                <img class="img-fluid" src="{{asset('storage/uploads/blog/'.$blog->gambar)}}" style="height:30%">
            @else
                <img class="img-fluid" src="{{asset('img/pp_user.jpg')}}" style="height:30%">
            @endif
        @endif
        <div class="custom-file" style="margin-top: 15px;">
            {!! Form::file('gambar', ['class' => 'custom-file-input']) !!}
            {!! Form::label('gambar', 'Choose file', ['class' => 'custom-file-label']) !!}
        </div>
    </div>
</div>
<div class="clearfix"></div>


<!-- tinymce -->
<script src="https://cdn.tiny.cloud/1/c6odapdaj480ujk53w7tjrzh8nh78qpep4hucsg70oi0ze5n/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

<script>
    tinymce.init({
        selector: 'textarea',
        height: 500,
        menubar: false,
        plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
        toolbar_mode: 'floating',
    });
</script>