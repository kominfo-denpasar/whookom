@extends('front.layouts.app')

@section('content')

<section class="section main-section">

	<div class="max-w-2xl mx-auto px-4 py-12 sm:px-6">
		<article class="rounded-xl border border-gray-200 bg-white p-4 shadow-lg md:px-8">
				<div class="flex items-center">
					<img
					alt=""
					src="https://img.freepik.com/free-vector/woman-teaching-boy-with-maracas_74855-5966.jpg?t=st=1737948234~exp=1737951834~hmac=975b3e4020a8f6e9242638b86d30bad4321c5b6bfc0df060f05cc2a12f77c630&w=1380"
					class="sm:h-60 mx-auto"
					/>
				<div>
				</div>
			</div>

			@if($message = Session::get("warning"))
			<div class="bg-blue-100 border border-blue-400 text-blue-700 px-4 py-3 rounded relative mt-2" role="alert">
				<strong class="font-bold">Info: </strong>
				<span class="block sm:inline">{{$message}}</span>
			</div>
			@endif

			<div class="mt-4 mb-2 space-y-2">
				<div role="alert" class="rounded border-s-4 border-blue-500 bg-blue-50 p-4">
					<!-- <div class="flex items-center gap-2 text-green-800">
						<strong class="block font-medium"> Catatan</strong>
					</div> -->

					<p class="text-blue-700">
						Terima kasih telah mau mengajukan pendaftaran konsultasi. Silakan untuk melengkapi data-data berikut ini 🙏🏻
					</p>
				</div>
				
			</div>

			<form action="{{route('front.konseling-keluhan-store')}}" method="POST" class="space-y-2">
				@csrf
				<input type="hidden" name="mas_id" value="{{$masyarakat->token}}">
				<div class="field">
					<label class="label">Nama Lengkap</label>
					<div class="field-body">
						<div class="field">
							<div class="control">
								<input type="text" autocomplete="off" name="nama" value="{{$masyarakat->nama}}" class="input" readonly>
							</div>
							<!-- <p class="help">Isi dengan nama lengkap Anda</p> -->
						</div>
					</div>
				</div>
				<!-- .field -->

				<div class="field">
					<label class="label">NIK</label>
					<div class="field-body">
						<div class="field">
						<div class="control">
							<input type="text" autocomplete="off" name="nik" placeholder="5171xxx" class="input @error('title') is-invalid @enderror" required="">
						</div>
						<p class="help">Nomor Induk Kependudukan pada KTP Anda</p>
						<!-- error message untuk title -->
						@error('nik')
							<div class="alert alert-danger mt-2">
								{{ $message }}
							</div>
						@enderror
						</div>
					</div>
				</div>
				<!-- .field -->

				<div class="field">
					<label class="label">Status Perkawinan</label>
					<div class="field-body">
						<div class="field">
							<div class="control">
								<select name="status_kawin" class="w-full p-2 input" required="">
									<option value="">Pilih</option>
									<option>Lajang</option>
									<option>Menikah</option>
									<option>Cerai</option>
								</select>
							</div>
							<p class="help">Pilih salah satu</p>
						</div>
					</div>
				</div>
				<!-- .field -->

				<div class="field">
					<label class="label">Pendidikan</label>
					<div class="field-body">
						<div class="field">
							<div class="control">
								<input type="text" autocomplete="off" placeholder="Isi..." name="pendidikan" class="input" required="">
							</div>
							<p class="help">Pendidikan Terakhir</p>
						</div>
					</div>
				</div>
				<!-- .field -->

				<div class="field">
					<label class="label">Pekerjaan</label>
					<div class="field-body">
						<div class="field">
							<div class="control">
								<input type="text" autocomplete="off" placeholder="Isi..." name="pekerjaan" class="input" required="">
							</div>
							<p class="help">Pekerjaan Anda saat ini</p>
						</div>
					</div>
				</div>
				<!-- .field -->

				<div class="field">
					<label class="label">e-mail</label>
					<div class="field-body">
						<div class="field">
							<div class="control">
								<input type="email" autocomplete="off" name="email" placeholder="nama@gmail.com" class="input" required="">
							</div>
							<p class="help">e-mail Anda yang masih aktif. Kami juga menggunakan e-mail untuk menyampaikan informasi</p>
						</div>
					</div>
				</div>
				<!-- .field -->

				<hr class="pt-4">

				<div class="field">
					<label class="label">Kecamatan</label>
					<div class="field-body">
						<div class="field">
							<div class="control">
								<select name="kec_id" id="kec_id" class="w-full p-2 input" required="">
									<option value="">Pilih</option>
								</select>
							</div>
							<p class="help">Pilih salah satu</p>
						</div>
					</div>
				</div>
				<!-- .field -->

				<div class="field">
					<label class="label">Kelurahan/Desa</label>
					<div class="field-body">
						<div class="field">
							<div class="control">
								<select name="desa_id" id="desa_id" class="w-full p-2 input" required="">
									<option value="">Pilih</option>
								</select>
							</div>
							<p class="help">Pilih salah satu</p>
						</div>
					</div>
				</div>
				<!-- .field -->

				<div class="field">
					<label class="label">Alamat Tempat Tinggal</label>
					<div class="field-body">
						<div class="field">
							<div class="control">
								<textarea class="textarea" name="alamat" autocomplete="off" placeholder="Jl. Nama Jalan, Nomor, Banjar"></textarea>
							</div>
							<!-- <p class="help">Isi dengan nama lengkap Anda</p> -->
						</div>
					</div>
				</div>
				<!-- .field -->

				<div class="border rounded-md p-4 w-full mx-auto max-w-2xl">
					<div class="field">
						<label class="label">Keluhan atau Ketidaknyamanan apa yang Anda rasakan?</label>
						<div class="field-body">
							<div class="field">
								<div class="control">
									<textarea class="textarea" name="keluhan" autocomplete="off" placeholder="Saya merasa..."></textarea>
								</div>
								<div class="bg-blue-100 border border-blue-400 text-blue-700 px-4 py-3 rounded relative" role="alert">
									<strong class="font-bold">Info: </strong>
									<span class="block sm:inline">Jelaskan dan deskripsikan apa yang Anda rasakan saat ini.</span>
								</div>
							</div>
						</div>
					</div>
					<!-- .field -->
				</div>

				<div class="border rounded-md p-4 w-full mx-auto max-w-2xl">
					<label class="label">Sejak Kapan Anda Rasakan Keluhan atau Ketidaknyamanan ini?</label>
					<div>
						<label class="flex bg-gray-100 text-gray-700 rounded-md px-3 py-2 my-3  hover:bg-indigo-300 cursor-pointer ">
							<input type="radio" name="waktu_kapan">
							<i class="pl-2">Sejak 2 hari belakangan</i>
						</label>

						<label class="flex bg-gray-100 text-gray-700 rounded-md px-3 py-2 my-3  hover:bg-indigo-300 cursor-pointer ">
							<input type="radio" name="waktu_kapan">
							<i class="pl-2">Sejak Seminggu Terakhir</i>
						</label>

						<label class="flex bg-gray-100 text-gray-700 rounded-md px-3 py-2 my-3  hover:bg-indigo-300 cursor-pointer ">
							<input type="radio" name="waktu_kapan">
							<i class="pl-2">Sejak Sebulan Terakhir</i>
						</label>

						<label class="flex bg-gray-100 text-gray-700 rounded-md px-3 py-2 my-3  hover:bg-indigo-300 cursor-pointer ">
							<input type="radio" name="waktu_kapan">
							<i class="pl-2">Sejak setahun terakhir</i>
						</label>

						<label class="flex bg-gray-100 text-gray-700 rounded-md px-3 py-2 my-3  hover:bg-indigo-300 cursor-pointer ">
							<input type="radio" name="waktu_kapan">
							<i class="pl-2">Lebih dari Setahun</i>
						</label>
					</div>
					<div class="bg-blue-100 border border-blue-400 text-blue-700 px-4 py-3 rounded relative mt-2" role="alert">
						<strong class="font-bold">Info: </strong>
						<span class="block sm:inline">Isi dengan waktu berapa lama Anda mengalami keluhan atau Ketidaknyamanan itu</span>
					</div>
				</div>

				<div class="border rounded-md p-4 w-full mx-auto max-w-2xl">
					<div class="field">
						<label class="label">Seberapa mengganggu hal tersebut pada aktivitas sehari-hari anda?</label>
						<div class="field-body">
							<div class="field grouped multiline">
								@foreach (range(1, 10) as $item)
								<div class="control">
									<label class="radio">
									<input type="radio" name="nilai_mengganggu" value="{{$item}}" >
									<span class="check"></span>
									<span class="control-label">{{$item}}</span>
									</label>
								</div>
								@endforeach
							</div>
						</div>

						<div class="bg-blue-100 border border-blue-400 text-blue-700 px-4 py-3 rounded relative mt-2" role="alert">
							<strong class="font-bold">Info: </strong>
							<span class="block sm:inline">Semakin rendah nilai maka hal itu tidak mengganggu, sedangkan semakin tinggi nilainya maka hal itu sangat mengganggu bagi Anda</span>
						</div>
					</div>
				</div>

				<div class="space-y-2 text-center">
					<!-- Base -->
					<button type="submit" class="mt-4 mb-2 group relative inline-block focus:outline-none focus:ring">
						<span
							class="absolute inset-0 translate-x-1.5 translate-y-1.5 bg-yellow-300 transition-transform group-hover:translate-x-0 group-hover:translate-y-0"
						></span>

						<span
							class="relative inline-block border-2 border-current px-8 py-3 text-sm font-bold tracking-widest text-black group-active:text-opacity-75">
							Submit Data
						</span>
					</button>
				</div>
			</form>
		</article>

	</div>
</section>

@include('front.modals.survei')
@endsection

@push('script')

<script type="text/javascript">
	const fetchAllTodos = () => {
	return fetch("//www.emsifa.com/api-wilayah-indonesia/api/districts/5171.json")
		.then((response) => {
			if (!response.ok) {
				throw new Error('Network response was not ok.');
			}
			return response.json();
		})
		.then((data) => {
			console.log(data);
			return data;
		})
		.catch((error) => {
			return error;
		});
	};

	// Ambil tag id container
	const containerDisplay = document.getElementById('kec_id')

	// Komponen Card untuk render semua data
	const cardComponent = (id, title) => {
		// Buat Card
		const data = `
			<option value="${id}">${title}</option>
		`
		// Tambahkan kedalam elemen container yang sudah kita definisikan sebelumnya
		containerDisplay.insertAdjacentHTML('afterbegin', data)
	}

	function render() {
		fetchAllTodos()
			.then((response) => {
				response.forEach(result => {
					cardComponent(result.id, result.name);
				});
			})
			.catch((error) => {
				console.error('Error rendering data:', error);
			});
	}

	render();

	document.querySelector('#kec_id').addEventListener('change', function() {
		const opsi = document.querySelector('#kec_id').value;

		const url = `//www.emsifa.com/api-wilayah-indonesia/api/villages/${opsi}.json`;

		fetch(url)
			.then((response) => {
				if (!response.ok) {
					throw new Error('Network response was not ok.');
				}
				return response.json();
			})
			.then((data) => {
				console.log(data);
				const containerDisplay = document.getElementById('desa_id');
				containerDisplay.innerHTML = "<option value=''>Pilih</option>";
				data.forEach(result => {
					const data = `
						<option value="${result.id}">${result.name}</option>
					`
					containerDisplay.insertAdjacentHTML('afterbegin', data)
				});
			})
			.catch((error) => {
				return error;
			});
	});
</script>
@endpush