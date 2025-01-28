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
			<div class="bg-blue-100 border border-blue-400 text-blue-700 px-4 py-3 rounded relative my-2" role="alert">
				<strong class="font-bold">Info: </strong>
				<span class="block sm:inline">{{$message}}</span>
			</div>
			@endif
			<h2 class="text-2xl font-bold mb-6 text-center">Hasil Survei</h2>

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
						<strong class="font-medium text-black">Apa yang perlu dilakukan untuk mengisi survei?</strong>

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

					<p class="text-sm text-green-700">
						Mohon untuk menginputkan Nomor Induk Kependudukan (NIK) Anda pada kolom di bawah ini. Terima kasih 🙏🏻
					</p>
				</div>
				
			</div>

		</article>

	</div>
</section>

@include('front.modals.survei')
@endsection