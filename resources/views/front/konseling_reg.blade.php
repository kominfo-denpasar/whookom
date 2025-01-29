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
			
			<div class="mt-4 mb-2 space-y-2">
				<div role="alert" class="rounded border-s-4 border-blue-500 bg-blue-50 p-4">
					<!-- <div class="flex items-center gap-2 text-green-800">
						<strong class="block font-medium"> Catatan</strong>
					</div> -->

					<p class="text-blue-700">
						Mohon untuk menginputkan kode OTP yang telah dikirimkan melalui email dan whatsApp Anda pada kolom di bawah ini. Terima kasih 🙏🏻
					</p>
				</div>
			</div>

			@if(Session::get("success") == "Kode OTP berhasil dikirimkan!")
			<div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mt-2" role="alert">
				<strong class="font-bold">Info: </strong>
				<span class="block sm:inline">{{Session::get("success")}}</span>
			</div>
			@else
			<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-2" role="alert">
				<span class="block sm:inline">{{Session::get("success")}}</span>
			</div>
			@endif

			<form action="{{route('front.validasi-otp')}}" method="POST" class="space-y-2">
				@csrf
				<div class="field">
					<label class="label">Kode OTP</label>
					<div class="field-body">
						<div class="field">
						
						<div class="control">
							<input type="hidden" name="mas_id" value="{{Session::get('mas_id')}}">
							<input type="text" autocomplete="off" name="otp" placeholder="xxxxxx" class="input @error('otp') is-invalid @enderror" required="">
						</div>
						<p class="help">Batas waktu menginputkan kode: 15 menit</p>
						<!-- error message untuk title -->
						@error('otp')
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