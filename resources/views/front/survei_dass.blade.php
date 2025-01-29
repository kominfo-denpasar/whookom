@extends('front.layouts.app')

@section('content')

<section class="section main-section">

	<div class="max-w-2xl mx-auto px-4 py-12 sm:px-6">
		<article class="rounded-xl border border-gray-200 bg-white p-4 shadow-lg">
				<div class="flex items-center">
					<img
					alt=""
					src="https://img.freepik.com/free-vector/online-survey-analysis-electronic-data-collection-digital-research-tool-computerized-study-analyst-considering-feedback-results-analysing-info_335657-854.jpg?t=st=1737950194~exp=1737953794~hmac=17bfa0dd4b22961792ee8e41cf21cc263947a73a63e4ec8928fc4209207f6351&w=826"
					class="sm:h-60 mx-auto"
					/>
				<div>
				</div>
			</div>

			<div class="lg:p-8">
				@if($dasshasil)
				<div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative my-2" role="alert">
					<span class="block sm:inline">
						Anda sudah pernah mengisi survei sebelumnya. Berikut adalah riwayat pengisian survei Anda.<br>
					</span>
				</div>
				<ul class="mt-2 space-y-2">
					@foreach($dasshasil as $d)
					<li>
						<a onclick="toggleModal('apaitudass')" class="block h-full rounded-lg border border-gray-700 p-4 hover:border-rose-600">
							<strong class="font-medium text-black">Survei {{$d->created_at}}</strong>

							<p class="mt-1 text-xs font-medium text-gray-500">
							Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates iure ipsa ipsum tenetur, molestias atque nam itaque nisi ex reiciendis laboriosam qui optio, quia, est voluptate iste culpa deleniti architecto.
							</p>
						</a>
					</li>
					@endforeach
				</ul>
				
				<div class="bg-blue-100 border border-blue-400 text-blue-700 px-4 py-3 rounded relative my-2" role="alert">
					<strong class="font-bold">Info: </strong>
					<span class="block sm:inline">Anda masih dapat mengisi survei lagi jika perlu. Atau ingin mengajukan pendaftaran untuk konseling? <a href="{{route('front.konseling-store-reg', Session::get('mas_id'))}}"><strong class="font-bold">Klik di sini</strong></a> untuk mengajukan pendaftaran konseling.</span>
				</div>
				@elseif($message = Session::get("warning"))
				<div class="bg-blue-100 border border-blue-400 text-blue-700 px-4 py-3 rounded relative my-2" role="alert">
					<strong class="font-bold">Info: </strong>
					<span class="block sm:inline">{{$message}}</span>
				</div>
				@endif
				
				<h2 class="text-2xl font-bold mb-6 text-center">Depression Anxiety and Stress Scale <br>(DASS-21)</h2>
				<form action="{{route('front.store-dass')}}" method="POST" class="space-y-2">
					@csrf
					<input type="hidden" name="mas_id" value="{{Session::get('mas_id')}}">
					<p class="mb-4">Silakan baca setiap pernyataan dan pilih angka 0, 1, 2, atau 3 yang menunjukkan seberapa banyak pernyataan tersebut berlaku untuk Anda selama seminggu terakhir. Tidak ada jawaban yang benar atau salah. Jangan menghabiskan terlalu banyak waktu pada pernyataan mana pun.</p>
					@if(empty($dass))
					<div role="alert" class="rounded border-s-4 border-red-500 bg-red-50 p-4">
						<div class="flex items-center gap-2 text-red-800">
							<strong class="block font-medium"> Perhatian</strong>
						</div>

						<p class="text-sm text-red-700">
							Terjadi kesalahan pada sistem, silahkan coba beberapa saat lagi.
						</p>
					</div>
					@else
						@foreach($dass as $d)
							<hr>
							<div class="my-4">
								<label class="block text-gray-700 font-medium mb-2">{{$no}}. {{$d->pertanyaan}}</label>
								@if($d->kode=="Depression")
									<select class="w-full p-2 border border-gray-300 rounded-lg" name="nilai_d[]" required="">
								@elseif($d->kode=="Anxiety")
									<select class="w-full p-2 border border-gray-300 rounded-lg" name="nilai_a[]" required="">
								@elseif($d->kode=="Stress")
									<select class="w-full p-2 border border-gray-300 rounded-lg" name="nilai_s[]" required="">
								@endif
									<option value="">- Pilih salah satu -</option>
									<option value="0">0 - Tidak berlaku sama sekali</option>
									<option value="1">1 - Berlaku untuk saya sampai batas tertentu, atau beberapa waktu</option>
									<option value="2">2 - Berlaku untuk saya sampai batas yang cukup besar, atau sebagian besar waktu</option>
									<option value="3">3 - Berlaku untuk saya sangat banyak, atau hampir sepanjang waktu</option>
								</select>
							</div>
							@php
								$no++;
							@endphp
						@endforeach
					@endif
					
					<div class="text-center">
						<!-- Base -->
						@if(!empty($dass))
						<button type="submit" class="group relative inline-block focus:outline-none focus:ring">
							<span
								class="absolute inset-0 translate-x-1.5 translate-y-1.5 bg-yellow-300 transition-transform group-hover:translate-x-0 group-hover:translate-y-0"
							></span>

							<span
								class="relative inline-block border-2 border-current px-8 py-3 text-sm font-bold tracking-widest text-black group-active:text-opacity-75">
								Submit Jawaban
							</span>
						</button>
						@endif
					</div>
				</form>
			</div>
		</article>

	</div>
</section>

@endsection