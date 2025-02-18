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

			<h2 class="text-2xl font-bold mb-6 text-center">Perkenalan Diri</h2>

			<div class="mt-4 mb-2 space-y-2">
				<div role="alert" class="rounded border-s-4 border-blue-500 bg-blue-50 p-4">
					<!-- <div class="flex items-center gap-2 text-green-800">
						<strong class="block font-medium"> Catatan</strong>
					</div> -->

					<p class="text-blue-700">
						Ketahui tingkat stress, depresi dan kecemasan Anda sebagai langkah awal untuk mengenali diri sendiri melalui pengisian survei DASS-21.
					</p>
				</div>
			</div>

			<ul class="max-w-2xl mx-auto my-5 divide-y shadow shadow-blue-600 rounded-xl">
				<li>
					<details class="group" open>
						<summary class="flex items-center gap-3 px-4 py-3 font-medium marker:content-none hover:cursor-pointer">
							<svg class="w-5 h-5 text-gray-500 transition group-open:rotate-90" xmlns="http://www.w3.org/2000/svg"
								width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
								<path fill-rule="evenodd"
									d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
								</path>
							</svg>
							<span>Apa itu Survei DASS-21?</span>
						</summary>

						<article class="px-4 pb-4">
							<p class="my-2 text-sm">
                                Survei DASS-21 adalah alat ukur yang digunakan untuk mengukur tingkat depresi, kecemasan, dan stres yang dialami oleh seseorang. Survei ini terdiri dari 21 pertanyaan yang dirancang untuk mengidentifikasi gejala-gejala tersebut dalam diri seseorang.
                            </p>
						</article>
					</details>
				</li>
				<li>
					<details class="group">
						<summary class="flex items-center gap-3 px-4 py-3 font-medium marker:content-none hover:cursor-pointer">
							<svg class="w-5 h-5 text-gray-500 transition group-open:rotate-90" xmlns="http://www.w3.org/2000/svg"
								width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
								<path fill-rule="evenodd"
									d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
								</path>
							</svg>
							<span>Apa yang perlu pahami dan dilakukan sebelum mengisi survei?</span>
						</summary>

						<article class="px-4 pb-4">
							<p class="text-sm my-2">
								Sebelum mengisi survei, pastikan Anda berada di tempat yang tenang dan tidak terganggu. Jawablah pertanyaan dengan jujur dan sejujur-jujurnya. Hasil survei ini akan membantu Anda untuk mengetahui tingkat depresi, kecemasan, dan stres yang Anda alami.
							</p>
							<p class="text-sm my-2">
								Hasil survei ini tidak dapat digunakan sebagai alat diagnosis medis. Jika Anda merasa membutuhkan bantuan lebih lanjut, segera hubungi psikolog atau psikiater terdekat.
							</p>
							<p class="my-2 text-sm">
								Hasil dari survei DASS-21 ini bertujuan untuk memberikan gambaran umum mengenai tingkat depresi, kecemasan, dan stres yang dialami responden. Tes ini bukan alat diagnosis medis dan tidak dapat menggantikan evaluasi profesional dari psikolog atau psikiater.
							</p>
							<p class="my-2 text-sm">
								Jika hasil survei menunjukkan tingkat yang tinggi dalam salah satu atau lebih kategori, disarankan untuk berkonsultasi dengan tenaga profesional di bidang kesehatan mental guna mendapatkan penilaian yang lebih akurat dan rekomendasi yang sesuai.
							</p>
						</article>
					</details>
				</li>
				<li>
					<details class="group">
						<summary class="flex items-center gap-3 px-4 py-3 font-medium marker:content-none hover:cursor-pointer">
							<svg class="w-5 h-5 text-gray-500 transition group-open:rotate-90" xmlns="http://www.w3.org/2000/svg"
								width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
								<path fill-rule="evenodd"
									d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
								</path>
							</svg>
							<span>Hal-hal lain yang ingin ditanyakan</span>
						</summary>

						<article class="px-4 pb-4">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et ipsum sapien. Vestibulum molestie
								porttitor augue vitae vulputate. Aliquam nec ex maximus, suscipit diam vel, tristique tellus. </p>
						</article>
					</details>
				</li>

			</ul>

			<div class="mt-4 mb-2 space-y-2">
				<div role="alert" class="rounded border-s-4 border-green-500 bg-green-50 p-4">
					<!-- <div class="flex items-center gap-2 text-green-800">
						<strong class="block font-medium"> Catatan</strong>
					</div> -->

					<p class="text-green-700">
						Mohon untuk menginputkan Nomor Telpon Anda pada kolom di bawah ini. Kami akan mengirimkan informasi lanjutan melalui Whatsapp. Terima kasih 🙏🏻
					</p>
				</div>
			</div>

			<form action="{{route('front.cek-nik')}}" method="POST" class="space-y-2">
				@csrf
				<div class="field">
					<label class="label">Nomor HP</label>
					<div class="field-body">
						<div class="field">
							<div class="field addons">
								<div class="control">
									<input class="input" value="+62" size="2" readonly="">
								</div>
								<div class="control expanded">
									<input class="input" type="tel" placeholder="81xxx" name="hp" required="">
								</div>
							</div>
							<p class="help">Tanpa nol depan. Disarankan nomor yang terhubung dengan WhatsApp. Kami menggunakan WhatsApp untuk mengirimkan info ke Anda</p>
							<!-- error message untuk title -->
							@error('hp')
								<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-2" role="alert">
									{{ $message }}
								</div>
							@enderror
							@if($message = Session::get("error"))
							<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-2" role="alert">
								<strong class="font-bold">Error: </strong>
								<span class="block sm:inline">{{$message}}</span>
							</div>
							@endif
						</div>
					</div>
				</div>
				<!-- .field -->
				 
				<div class="space-y-2 text-center">
					<!-- Base -->
					<button type="submit" class="mt-4 mb-2 group relative inline-block focus:outline-none focus:ring">
						<span
							class="absolute inset-0 translate-x-1.5 translate-y-1.5 bg-yellow-300 transition-transform group-hover:translate-x-0 group-hover:translate-y-0"
						></span>

						<span
							class="relative inline-block border-2 border-current px-8 py-3 text-sm font-bold tracking-widest text-black group-active:text-opacity-75">
							Submit
						</span>
					</button>
				</div>
			</form>
		</article>

	</div>
</section>

@include('front.modals.survei')
@endsection