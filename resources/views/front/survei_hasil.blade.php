@extends('front.layouts.app')

@section('content')

<section class="section main-section">

	<div class="max-w-2xl mx-auto px-4 py-12 sm:px-6">
		<article class="rounded-xl border border-gray-200 bg-white p-4 shadow-lg md:px-8">
				<div class="flex items-center">
					<img
					alt=""
					src="https://img.freepik.com/free-vector/female-winner-getting-first-prize-man-giving-golden-cup-woman-podium-flat-vector-illustration-winning-leadership-achievement-concept_74855-10062.jpg?t=st=1738118839~exp=1738122439~hmac=c07ffc922cd6526723d4358f987b7c1091273d709630aa2694f2af3fd7a17231&w=1380"
					class="sm:h-60 mx-auto"
					/>
				<div>
				</div>
			</div>

			@if($message = Session::get("success"))
			<div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative my-2" role="alert">
				<strong class="font-bold">Info: </strong>
				<span class="block sm:inline">{{$message}}</span>
			</div>
			@endif

			<h2 class="text-2xl font-bold mb-6 text-center">Hasil Survei</h2>

			<div class="mt-4 mb-2 space-y-2">
				<p class="text-md">
					Berikut adalah hasil dari survei yang telah Anda isi:
				</p>
				@if(Session::get("status")=="Normal")
				<div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative my-2" role="alert">
				@elseif(Session::get("status")=="Mild")
				<div class="bg-lime-100 border border-lime-400 text-lime-700 px-4 py-3 rounded relative my-2" role="alert">
				@elseif(Session::get("status")=="Moderate")
				<div class="bg-yellow-100 border border-yellow-400 text-yellow-700 px-4 py-3 rounded relative my-2" role="alert">
				@elseif(Session::get("status")=="Severe")
				<div class="bg-purple-100 border border-purple-400 text-purple-700 px-4 py-3 rounded relative my-2" role="alert">
				@elseif(Session::get("status")=="Extremely Severe")
				<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative my-2" role="alert">
				@else
				<div class="bg-stone-100 border border-stone-400 text-stone-700 px-4 py-3 rounded relative my-2" role="alert">
				@endif
					{{Session::get("hasil")}}
				</div>
			</div>

			<div class="space-y-2 text-center">

				<!-- Base -->
				<a href="{{route('front.konseling-store-reg', Session::get('mas_id'))}}" class="mt-4 mb-2 group relative inline-block focus:outline-none focus:ring">
					<span
						class="absolute inset-0 translate-x-1.5 translate-y-1.5 bg-yellow-300 transition-transform group-hover:translate-x-0 group-hover:translate-y-0"
					></span>

					<span
						class="relative inline-block border-2 border-current px-8 py-3 text-sm font-bold tracking-widest text-black group-active:text-opacity-75">
						Iya, Saya mau konseling
					</span>
				</a>
			</div>
			<div class="space-y-2 text-center">
				<a class="text-sm" href="{{url('/')}}">
					<p class="text-decoration-line: underline;">Tidak, Terima kasih</p>
				</a>
			</div>

			<div class="mt-4 mb-2 space-y-2">
				<div role="alert" class="rounded border-s-4 border-blue-500 bg-blue-50 p-4">
					<div class="flex items-center gap-2 text-blue-800">
						<strong class="block font-medium"> Catatan:</strong>
					</div>

					<p class="text-blue-700">
					Hasil dari survei DASS-21 ini bertujuan untuk memberikan gambaran umum mengenai tingkat depresi, kecemasan, dan stres yang dialami responden. Tes ini bukan alat diagnosis medis dan tidak dapat menggantikan evaluasi profesional dari psikolog atau psikiater.</p>
					</p>
				</div>
			</div>

		</article>

	</div>
</section>

@include('front.modals.survei')
@endsection