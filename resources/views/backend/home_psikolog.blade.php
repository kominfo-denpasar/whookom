@extends('layouts.app')

@section('content') 
<div class="container-fluid"> 
	<div class="row">
		<div class="col-lg-8">
			<div class="row">
				<div class="col-12 col-sm-6 col-md-4">
					<div class="info-box">
					<span class="info-box-icon bg-danger elevation-1"><i class="fas fa-cog"></i></span>

					<div class="info-box-content">
						<span class="info-box-text">Konseling Belum</span>
						<span class="info-box-number">
							<h3>10</h3>
						</span>
					</div>
					<!-- /.info-box-content -->
					</div>
					<!-- /.info-box -->
				</div>
				<div class="col-12 col-sm-6 col-md-4">
					<div class="info-box">
					<span class="info-box-icon bg-warning elevation-1"><i class="fas fa-cog"></i></span>

					<div class="info-box-content">
						<span class="info-box-text">Konseling On Progress</span>
						<span class="info-box-number">
							<h3>10</h3>
						</span>
					</div>
					<!-- /.info-box-content -->
					</div>
					<!-- /.info-box -->
				</div>
				<div class="col-12 col-sm-6 col-md-4">
					<div class="info-box">
					<span class="info-box-icon bg-success elevation-1"><i class="fas fa-cog"></i></span>

					<div class="info-box-content">
						<span class="info-box-text">Konseling Selesai</span>
						<span class="info-box-number">
							<h3>10</h3>
						</span>
					</div>
					<!-- /.info-box-content -->
					</div>
					<!-- /.info-box -->
				</div>
			</div>

			<div class="card">
				<div class="card-header border-0">
					<h3 class="card-title">
						List Klien yang registrasi konseling
					</h3>
					<div class="card-tools">
						<a href="#" class="btn btn-tool btn-sm">
							<i class="fas fa-bars"></i>
						</a>
					</div>
				</div>
				<div class="card-body table-responsive p-0">
					<table class="table table-striped table-valign-middle">
						<thead>
							<tr>
								<th>#</th>
								<th>Nama Klien</th>
								<th>Tanggal Registrasi</th>
								<th>Opsi</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									1
								</td>
								<td>$13 USD</td>
								<td>
									<small class="text-success mr-1">
										<i class="fas fa-arrow-up"></i>
										12%
									</small>
									12,000 Sold
								</td>
								<td>
									<a href="#" class="text-muted">
										<i class="fas fa-search"></i>
									</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<!-- /.card -->
		</div>
		<!-- .col-lg-6 -->

		<div class="col-lg-4">
			<div class="card card-primary card-outline">
				<div class="card-body box-profile">
					<div class="text-center">
						<img class="profile-user-img img-fluid img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">
					</div>

					<h3 class="profile-username text-center">Nina Mcintire</h3>

					<p class="text-muted text-center">Psikolog</p>

					<ul class="list-group list-group-unbordered mb-3">
						<li class="list-group-item">
						<b>SIPP</b> <a class="float-right">123921125</a>
						</li>
						<li class="list-group-item">
						<b>Nomor HP</b> <a class="float-right">+62 91823101 12</a>
						</li>
						<li class="list-group-item">
						<b>Alamat</b> <a class="float-right">Jl. Hehe</a>
						</li>
					</ul>

					<a href="#" class="btn btn-primary btn-block"><b>Detail</b></a>
				</div>
				<!-- /.card-body -->
			</div>
		</div>
		<!-- .col-lg-6 -->
	</div>
</div>
@endsection