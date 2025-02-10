@extends('layouts.app')

@section('content') 
	<section class="content-header">
		<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
			<h1>Detail Konseling</h1>
			</div>
			<div class="col-sm-6">
			<ol class="breadcrumb float-sm-right">
				<li class="breadcrumb-item"><a href="{{ url('admin/home-psikolog') }}">Dashboard Psikolog</a></li>
				<li class="breadcrumb-item active">Detail Konseling</li>
			</ol>
			</div>
		</div>
		</div><!-- /.container-fluid -->
	</section>

	<section class="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-3">

						<!-- Profile Image -->
						<div class="card card-primary card-outline">
							<div class="card-body box-profile">
								<div class="text-center">
									<img class="profile-user-img img-fluid img-circle" src="https://avataaars.io/?avatarStyle=Circle&topType=LongHairNotTooLong&accessoriesType=Blank&hairColor=Black&facialHairType=Blank&clotheType=CollarSweater&clotheColor=Gray01&eyeType=Default&eyebrowType=Default&mouthType=Default&skinColor=Pale" alt="User profile picture">
								</div>

								<h3 class="profile-username text-center">[nama_klien]</h3>
								<p class="text-muted text-center">[NIK]</p>

								<strong><i class="fas fa-book mr-1"></i> Pendidikan</strong>
								<p class="text-muted">
									[data]
								</p>

								<hr>
								<strong><i class="fas fa-briefcase mr-1"></i> Pekerjaan saat ini</strong>
								<p class="text-muted">
									[data]
								</p>

								<hr>
								<strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat</strong>
								<p class="text-muted">
									[data]
								</p>

								<!-- <hr>
								<strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>
								<p class="text-muted">
									<span class="tag tag-danger">UI Design</span>
									<span class="tag tag-success">Coding</span>
									<span class="tag tag-info">Javascript</span>
									<span class="tag tag-warning">PHP</span>
									<span class="tag tag-primary">Node.js</span>
								</p> -->

								<hr>
								<strong><i class="far fa-file-alt mr-1"></i> Catatan</strong>
								<p class="text-muted">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.
								</p>
							</div>
							<!-- /.card-body -->
						</div>
						<!-- /.card -->

					</div>
					<!-- /.col -->
					<div class="col-md-9">
						<div class="card">
							<div class="card-header p-2">
								<ul class="nav nav-pills">
									<li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Informasi</a></li>
									<li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Keluhan & DASS-21</a></li>
									<li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Input Data Konseling</a></li>
								</ul>
							</div><!-- /.card-header -->
							<div class="card-body">
								<div class="tab-content">
									<div class="active tab-pane" id="activity">
										<div class="callout callout-danger">
											<h5>Perhatian!</h5>
											<p>
												Konseling terhadap klien ini belum pernah dilakukan. Apakah Anda ingin mengkonfirmasi konseling ini? Pastikan jadwal sudah sesuai.
											</p>
										</div>
										<!-- .callout -->
										<div class="card card-primary shadow-md">
											<!-- /.card-header -->
											<div class="card-header">
												<h3 class="card-title">Jadwal Utama</h3>

												<div class="card-tools">
													<button type="button" class="btn btn-tool" data-card-widget="collapse" fdprocessedid="mjifpq">
													<i class="fas fa-minus"></i>
													</button>
												</div>
												<!-- /.card-tools -->
											</div>
											<div class="card-body">
												<table class="table table-bordered">
													<tbody>
														<tr>
															<td class="text-right">Tanggal</td>
															<td>[tanggal_konseling]</td>
														</tr>
														<tr>
															<td class="text-right">Jam</td>
															<td>[jam_konseling]</td>
														</tr>
													</tbody>
												</table>
											</div>
											<!-- /.card-body -->
										</div>
										<!-- /.card -->

										<div class="card card-info shadow-md">
											<!-- /.card-header -->
											<div class="card-header">
												<h3 class="card-title">Jadwal Alternatif</h3>

												<div class="card-tools">
													<button type="button" class="btn btn-tool" data-card-widget="collapse" fdprocessedid="mjifpq">
													<i class="fas fa-minus"></i>
													</button>
												</div>
												<!-- /.card-tools -->
											</div>
											<div class="card-body">
												<table class="table table-bordered">
													<tbody>
														<tr>
															<td class="text-right">Tanggal</td>
															<td>[tanggal_konseling]</td>
														</tr>
														<tr>
															<td class="text-right">Jam</td>
															<td>[jam_konseling]</td>
														</tr>
													</tbody>
												</table>
											</div>
											<!-- /.card-body -->
										</div>
										<!-- /.card -->

										<div class="card card-info shadow-md">
											<div class="card-body">
												<div class="btn-group float-right">
													<button type="button" class="btn btn-primary">Konfirmasi Jadwal Utama</button>
													<button type="button" class="btn btn-info">Konfirmasi Jadwal Alternatif</button>
													<button type="button" class="btn btn-danger">Batalkan</button>
												</div>
											</div>
										</div>
										<!-- /.card -->

										<hr>
										<div class="callout callout-warning">
											<h5>Perhatian!</h5>
											<p>
												Konseling terhadap klien saat ini sedang dalam proses, mohon inputkan data konseling setelah selesai melakukan assessment pada tab "Input Data Konseling".
											</p>
										</div>
										<!-- .callout -->

										<div class="card card-info shadow-md">
											<div class="card-body">
												<p>
													<b>Catatan:</b> Setelah selesai melakukan assessment, Klient dapat mengisi form evaluasi dengan mengklik tombol di bawah ini.
												</p>
												<div class="btn-group float-right">
													<a href="#!" class="btn btn-primary">Form Evaluasi Klien</a>
												</div>
											</div>
										</div>
										<!-- /.card -->

										<hr>
										<div class="callout callout-success">
											<h5>Perhatian!</h5>
											<p>
												Konseling terhadap Klien ini sudah selesai dilakukan. Untuk laporan hasil assessment dapat dilihat dengan mengklik tombol di bawah.
											</p>
										</div>
										<!-- .callout -->

										<div class="card card-info shadow-md">
											<div class="card-body">
												<div class="btn-group float-right">
													<a href="{{url('admin/home-psikolog/konseling/laporan-detail/1')}}" class="btn btn-primary">Laporan Detail Konseling</a>
													<a href="{{url('admin/home-psikolog/konseling/evaluasi/1')}}" class="btn btn-secondary">Form Evaluasi Klien</a>
												</div>
											</div>
										</div>
										<!-- /.card -->
									</div>
									<!-- /.tab-pane -->
									 
									<div class="tab-pane" id="timeline">
										<!-- The timeline -->
										<div class="card card-primary">
											<div class="card-header">
												<h3 class="card-title">Keluhan</h3>
											</div>
											<div class="card-body">
												<div class="callout callout-info">
													<p>[Deskripsi keluhan]</p>
												</div>
												<!-- .callout -->

												<div class="callout callout-info">
													<p>Informasi lanjutan terkait keluhan</p>
													<ul>
														<li>Lama waktu Klien merasakan keluhan: <b>[data]</b></li>
														<li>Tingkat nilai mengganggu pada aktivitas Klien: <b>[data]</b></li>
													</ul>
												</div>
												<!-- .callout -->
											</div>
										</div>

										
										<div class="card card-primary">
											<div class="card-header">
												<h3 class="card-title">Skor DASS-21</h3>
											</div>
											<!-- /.card-header -->
											<div class="card-body">
												<!-- we are adding the accordion ID so Bootstrap's collapse plugin detects it -->
												<div class="row">
													<div class="col-lg-4 col-6">
														<!-- small card -->
														<div class="small-box bg-info">
															<div class="inner">
																<h3>150</h3>

																<p>Kategori Stress</p>
															</div>
															<div class="icon">
																<i class="fas fa-user-plus"></i>
															</div>
														</div>
													</div>
													<!-- ./col -->
													<div class="col-lg-4 col-6">
														<!-- small card -->
														<div class="small-box bg-success">
															<div class="inner">
																<h3>53</h3>

																<p>Kategori Anxiety</p>
															</div>
															<div class="icon">
																<i class="fas fa-user-plus"></i>
															</div>
														</div>
													</div>
													<!-- ./col -->
													<div class="col-lg-4 col-6">
														<!-- small card -->
														<div class="small-box bg-warning">
															<div class="inner">
																<h3>44</h3>

																<p>Kategori Depression</p>
															</div>
															<div class="icon">
																<i class="fas fa-user-plus"></i>
															</div>
														</div>
													</div>
													<!-- ./col -->
													
													</div>
											</div>
											<!-- /.card-body -->
											</div>
									</div>
									<!-- /.tab-pane -->

									<div class="tab-pane" id="settings">
										<div class="callout callout-danger">
											<h5>Perhatian!</h5>
											<p>
												Mohon untuk mengkonfirmasi konseling pada tab informasi terlebih dahulu sebelum menginputkan hasil konseling.
											</p>
										</div>
										<!-- .callout -->
										<form class="form-horizontal">
											<div class="form-group row">
												<label for="inputExperience" class="col-sm-2 col-form-label">Hasil Assessment</label>
												<div class="col-sm-10">
													<textarea class="form-control" id="hasil" placeholder="hasil" disabled></textarea>
												</div>
											</div>

											<div class="form-group row">
												<label for="masalah" class="col-sm-2 col-form-label">Masalah</label>
												<div class="col-sm-10">
													<!-- checkbox -->
													<div class="row">
														<div class="col-md-6">
															<div class="form-check">
																<input class="form-check-input" type="checkbox">
																<label class="form-check-label">Penyakit 1</label>
															</div>
															<div class="form-check">
																<input class="form-check-input" type="checkbox">
																<label class="form-check-label">Penyakit 2</label>
															</div>
															<div class="form-check">
																<input class="form-check-input" type="checkbox">
																<label class="form-check-label">Penyakit n</label>
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-check">
																<input class="form-check-input" type="checkbox">
																<label class="form-check-label">Penyakit n</label>
															</div>
															<div class="form-check">
																<input class="form-check-input" type="checkbox">
																<label class="form-check-label">Penyakit n</label>
															</div>
															<div class="form-check">
																<input class="form-check-input" type="checkbox">
																<label class="form-check-label">Penyakit n</label>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="form-group row">
												<label for="inputExperience" class="col-sm-2 col-form-label">Kesimpulan</label>
												<div class="col-sm-10">
													<textarea class="form-control" id="inputExperience" placeholder="kesimpulan" disabled></textarea>
												</div>
											</div>
											<div class="form-group row">
												<label for="inputExperience" class="col-sm-2 col-form-label">Saran</label>
												<div class="col-sm-10">
													<textarea class="form-control" id="inputExperience" placeholder="saran" disabled></textarea>
												</div>
											</div>
											<div class="form-group row">
												<label for="customFile" class="col-sm-2 col-form-label">Dokumentasi</label>

												<div class="col-sm-10">
													<div class="custom-file">
														<input type="file" class="custom-file-input form-control" id="customFile">
														<label class="custom-file-label" for="customFile">Pilh Berkas</label>
													</div>
												</div>
											</div>
											<!-- <div class="form-group row">
												<div class="offset-sm-2 col-sm-10">
													<div class="checkbox">
														<label>
															<input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
														</label>
													</div>
												</div>
											</div> -->
											<div class="form-group row">
												<div class="offset-sm-2 col-sm-10">
													<button type="submit" class="btn btn-success" disabled>Kirim Data</button>
												</div>
											</div>
										</form>
									</div>
									<!-- /.tab-pane -->
								</div>
								<!-- /.tab-content -->
							</div><!-- /.card-body -->
						</div>
						<!-- /.card -->
					</div>
					<!-- /.col -->
				</div>
				<!-- /.row -->
			</div><!-- /.container-fluid -->
		</section>
@endsection