@extends('layouts.app')

@section('content') 
	<section class="content-header">
		<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
			<h1>Form Evaluasi Klien</h1>
			</div>
			<div class="col-sm-6">
			<ol class="breadcrumb float-sm-right">
				<li class="breadcrumb-item"><a href="#">Dashboard Psikolog</a></li>
				<li class="breadcrumb-item"><a href="#">Detail Konseling</a></li>
				<li class="breadcrumb-item active">Form Evaluasi Klien</li>
			</ol>
			</div>
		</div>
		</div><!-- /.container-fluid -->
	</section>

	<section class="content">
		<div class="container-fluid">
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
						
							<div class="row">
								<div class="col-11">
									<div class="form-group">
										<label>Seberapa membantu layanan konseling yang diberikan?
										</label>
										<select class="form-control">
											<option>option 1</option>
											<option>option 2</option>
											<option>option 3</option>
											<option>option 4</option>
											<option>option 5</option>
										</select>
									</div>
									<div class="form-group">
										<label>Setelah konseling, seberapa mengganggu keluhan yang Anda rasakan pada aktivitas sehari-hari?
										</label>
										<select class="form-control">
											<option>option 1</option>
											<option>option 2</option>
											<option>option 3</option>
											<option>option 4</option>
											<option>option 5</option>
										</select>
									</div>
									<div class="form-group">
										<label>Apakah anda bersedia merekomendasikan layanan konseling ini ke rekan/keluarga yang membutuhkan?
										</label>
										<select class="form-control">
											<option>Pilih</option>
											<option>Bersedia</option>
											<option>Tidak Bersedia</option>
										</select>
									</div>
									<div class="btn-group float-right">
										<button type="button" class="btn btn-primary">Kirim Data</button>
									</div>
								</div>
								<!-- .col-12 -->
								
							</div>
						</div>
						<div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
							<h3 class="text-primary"><i class="fas fa-user"></i> [Nama Klien]</h3>
							<p class="text-muted">
								[Data]
							</p>
							<div class="text-muted">
								<p class="text-sm">Alamat
								<b class="d-block">[Data]</b>
								</p>
								<p class="text-sm">Kontak
								<b class="d-block">[Data]</b>
								</p>
							</div>

							<!-- <h5 class="mt-5 text-muted">Berkas Pendukung</h5>
							<ul class="list-unstyled">
								<li>
								<a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Functional-requirements.docx</a>
								</li>
								<li>
								<a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-pdf"></i> UAT.pdf</a>
								</li>
								<li>
								<a href="" class="btn-link text-secondary"><i class="far fa-fw fa-envelope"></i> Email-from-flatbal.mln</a>
								</li>
								<li>
								<a href="" class="btn-link text-secondary"><i class="far fa-fw fa-image "></i> Logo.png</a>
								</li>
								<li>
								<a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Contract-10_12_2014.docx</a>
								</li>
							</ul> -->
						</div>
					</div>
				</div>
				<!-- /.card-body -->
			</div>
		</div><!-- /.container-fluid -->
	</section>
@endsection