@extends('layouts.app')

@section('content') 
<section class="content-header">
	<div class="container-fluid">
	<div class="row mb-2">
		<div class="col-sm-6">
		<h1>Dashboard Psikolog</h1>
		</div>
		<div class="col-sm-6">
		<ol class="breadcrumb float-sm-right">
			<li class="breadcrumb-item active">Dashboard Psikolog</li>
		</ol>
		</div>
	</div>
	</div><!-- /.container-fluid -->
</section>

<section class="content">
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
								<h3>{{$dashboard['konseling_belum']}}</h3>
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
								<h3>{{$dashboard['konseling_on_progress']}}</h3>
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
								<h3>{{$dashboard['konseling_selesai']}}</h3>
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
									<th>Status</th>
									<th>Opsi</th>
								</tr>
							</thead>
							<tbody>
							@foreach($keluhan as $k)
								<tr>
									<td>
										{{$loop->iteration}}
									</td>
									<td>{{$k->nama}}</td>
									<td>
										{{$k->created_at}}
									</td>
									<td>
										@if($k->status == 2)
											<span class="badge bg-success">Selesai</span>
										@elseif($k->status == 1)
											<span class="badge bg-warning">On Progress</span>
										@else
											<span class="badge bg-danger">Belum</span>
										@endif
									</td>
									<td>
										<a href="{{url('admin/home-psikolog/konseling/'.$k->token)}}" class="text-muted">
											<i class="fas fa-search"></i>
										</a>
									</td>
								</tr>
							@endforeach
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
							<img class="profile-user-img img-fluid img-circle" src="https://avataaars.io/?avatarStyle=Circle&topType=LongHairNotTooLong&accessoriesType=Blank&hairColor=Black&facialHairType=Blank&clotheType=CollarSweater&clotheColor=Gray01&eyeType=Default&eyebrowType=Default&mouthType=Default&skinColor=Pale" alt="User profile picture">
						</div>

						<h3 class="profile-username text-center">{{$psikolog->nama}}</h3>

						<p class="text-muted text-center">Psikolog</p>

						<ul class="list-group list-group-unbordered mb-3">
							<li class="list-group-item">
							<b>KTA</b> <a class="float-right">{{$psikolog->kta}}</a>
							</li>
							<li class="list-group-item">
							<b>SIPP</b> <a class="float-right">{{$psikolog->sipp}}</a>
							</li>
							<li class="list-group-item">
							<b>E-mail</b> <a class="float-right">{{$user->email}}</a>
							</li>
							<li class="list-group-item">
							<b>Nomor HP</b> <a class="float-right">{{$psikolog->hp}}</a>
							</li>
							<li class="list-group-item">
							<b>Alamat Praktek</b> <a class="float-right">{{$psikolog->alamat_praktek}}</a>
							</li>
						</ul>

						<a href="#!" class="btn btn-primary btn-block"><b>Detail Profil</b></a>
					</div>
					<!-- /.card-body -->
				</div>
			</div>
			<!-- .col-lg-6 -->
		</div>
	</div>
</section>
@endsection