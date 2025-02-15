@extends('layouts.app')

@section('content')
		<section class="content-header">
				<div class="container-fluid">
						<div class="row mb-2">
						<div class="col-sm-6">
								<h1>Data Psikolog</h1>
						</div>
						<div class="col-sm-6">
								<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
								<li class="breadcrumb-item active">Data Psikolog</li>
								</ol>
						</div>
						</div>
				</div><!-- /.container-fluid -->
		</section>

		<div class="content px-3">

				@include('flash::message')

				<div class="clearfix"></div>

				<div class="row">
				<div class="col-md-3">
					<a href="{{ route('psikologs.create') }}" class="btn btn-primary btn-block mb-3">Tambah</a>

					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Kategori</h3>

							<div class="card-tools">
								<button type="button" class="btn btn-tool" data-card-widget="collapse">
									<i class="fas fa-minus"></i>
								</button>
							</div>
						</div>
						<div class="card-body p-0">
							<ul class="nav nav-pills flex-column">
								<li class="nav-item active">
									<a href="#" class="nav-link">
										<i class="fas fa-filter"></i> Aktif
										<span class="badge bg-success float-right">12</span>
									</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">
										<i class="fas fa-filter"></i> Tidak Aktif
										<span class="badge bg-danger float-right">65</span>
									</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">
										<i class="far fa-trash-alt"></i> Arsip
									</a>
								</li>
							</ul>
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->
					<div class="card">
						<div class="card-header">
						<h3 class="card-title">Wilayah</h3>

							<div class="card-tools">
								<button type="button" class="btn btn-tool" data-card-widget="collapse">
								<i class="fas fa-minus"></i>
								</button>
							</div>
						</div>
						<div class="card-body p-0">
							<ul class="nav nav-pills flex-column">
								<li class="nav-item">
								<a class="nav-link">
									<i class="far fa-circle text-danger"></i>
									Denpasar Timur
									<span class="badge bg-secondary float-right">0</span>
								</a>
								</li>
								<li class="nav-item">
								<a class="nav-link">
									<i class="far fa-circle text-warning"></i> Denpasar Barat
									<span class="badge bg-secondary float-right">0</span>
								</a>
								</li>
								<li class="nav-item">
								<a class="nav-link">
									<i class="far fa-circle text-primary"></i>
									Denpasar Selatan
									<span class="badge bg-secondary float-right">0</span>
								</a>
								</li>
								<li class="nav-item">
								<a class="nav-link">
									<i class="far fa-circle text-primary"></i>
									Denpasar Utara
									<span class="badge bg-secondary float-right">0</span>
								</a>
								</li>
							</ul>
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->
				</div>
				<!-- /.col -->
				<div class="col-md-9">
					@include('psikologs.table')
				</div>
				<!-- /.col -->
			</div>

				<div class="card">
						
				</div>
		</div>

@endsection
