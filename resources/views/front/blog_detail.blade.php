@extends('front.layouts.app')

@section('content')
<div class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-16 relative">
	@if(file_exists(storage_path('app/public/uploads/blog/'.$blog->gambar)))
	<div class="bg-cover bg-center text-center overflow-hidden"
		style="min-height: 450px; background-image: url('{{url('/storage/uploads/blog/'.$blog->gambar)}}')"
		title="Gambar {{$blog->judul}}">
	</div>
	@else
	<div class="bg-cover bg-center text-center overflow-hidden"
		style="min-height: 450px; background-image: url('{{url('img/pp_user.jpg')}}')"
		title="Gambar {{$blog->judul}}">
	</div>
	@endif
	<div class="max-w-3xl mx-auto my-5">
		<div class="p-6 top-0 -mt-32 relative bg-white rounded-b lg:rounded-b-none lg:rounded-r flex flex-col justify-between leading-normal">
			<div class="bg-white">
				<a href="{{ url('/') }}" class="text-red-600 hover:text-gray-700 transition duration-500 ease-in-out text-sm">
					Beranda
				</a>
				<a href="{{ url('/artikel') }}" class="text-red-600 hover:text-gray-700 transition duration-500 ease-in-out text-sm">
					> Artikel
				</a>
				<a>> <span class="text-gray-900">Detail Artikel</span></a>
				<h1 href="#" class="text-gray-900 font-bold text-3xl mb-2">{{ $blog->judul }}</h1>
				<p class="text-gray-700 text-xs mt-2">Ditulis Oleh:
					<a href="#"
						class="text-red-600 font-medium hover:text-gray-900 transition duration-500 ease-in-out">
						{{ $blog->name }}
					</a> Di
					<a href="#"
						class="text-xs text-red-600 font-medium hover:text-gray-900 transition duration-500 ease-in-out">
						Artikel
					</a>
					Pada 
					<a href="#"
						class="text-xs text-red-600 font-medium hover:text-gray-900 transition duration-500 ease-in-out">
						{{ \Carbon\Carbon::parse($blog->updated_at)->format('d/m/Y')}}
					</a>
					

				</p>

				<div class="leading-2 my-5 text-base">
					{!! $blog->deskripsi !!}
				</div>


				<!-- <a href="#"
					class="text-xs text-red-600 font-medium hover:text-gray-900 transition duration-500 ease-in-out">
					#Tag1
				</a>,
				<a href="#"
					class="text-xs text-red-600 font-medium hover:text-gray-900 transition duration-500 ease-in-out">
					#Tag2
				</a> -->

			</div>
		</div>
	</div>
</div>


@endsection