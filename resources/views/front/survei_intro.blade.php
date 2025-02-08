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

			<ul class="mt-4 space-y-2">
				<li>
					<a onclick="toggleModal('apaitudass')" class="block h-full rounded-lg border border-gray-700 p-4 hover:border-rose-600">
						<strong class="font-medium text-black">Apa itu Survei DASS-21?</strong>

						<p class="mt-1 text-xs font-medium text-gray-500">
						Ketahui tentang apa itu survei DASS-21
						</p>
					</a>
				</li>

				<li>
					<a onclick="toggleModal('syaratsurvei')" class="block h-full rounded-lg border border-gray-700 p-4 hover:border-rose-600">
						<strong class="font-medium text-black">Apa yang perlu pahami dan dilakukan sebelum mengisi survei?</strong>

						<p class="mt-1 text-xs font-medium text-gray-500">
						Hal-hal yang perlu diketahui dan dilakukan saat mengisi survei
						</p>
					</a>
				</li>

			</ul>

			<div class="mt-4 mb-2 space-y-2">
				<div role="alert" class="rounded border-s-4 border-green-500 bg-green-50 p-4">
					<!-- <div class="flex items-center gap-2 text-green-800">
						<strong class="block font-medium"> Catatan</strong>
					</div> -->

					<p class="text-green-700">
						Mohon untuk menginputkan Nomor Telpon Anda pada kolom di bawah ini. Terima kasih 🙏🏻
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