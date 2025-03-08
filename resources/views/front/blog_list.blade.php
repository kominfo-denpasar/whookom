@extends('front.layouts.app')

@section('content')
<div class="max-w-screen-md mx-auto my-5 p-5 sm:p-10 md:p-16">
	<!-- Title Section -->
	<div class="text-center py-10">
		<h1 class="text-4xl font-bold text-black mb-4">{{ __('front.blog_title') }}</h1>
		<p class="text-lg text-gray-600">{{ __('front.blog_desc') }}</p>
	</div>

	@foreach($blogs as $bl)
	<article class="flex bg-white transition hover:shadow-xl mb-4">
		<div class="rotate-180 p-2 [writing-mode:_vertical-lr]">
			<time
			datetime="2022-10-10"
			class="flex items-center justify-between gap-4 text-xs font-bold uppercase text-gray-900"
			>
			<span>{{ \Carbon\Carbon::parse($bl->updated_at)->format('Y')}}</span>
			<span class="w-px flex-1 bg-gray-900/10"></span>
			<span>{{ \Carbon\Carbon::parse($bl->updated_at)->format('d M')}}</span>
			</time>
		</div>

		@if(file_exists(storage_path('app/public/uploads/blog/'.$bl->gambar)))
		<div class="hidden sm:block sm:basis-40">
			<img
			alt=""
			src="{{asset('/storage/uploads/blog/'.$bl->gambar)}}"
			class="aspect-square h-full w-full object-cover"
			/>
		</div>
		@else
		<div class="hidden sm:block sm:basis-40">
			<img
			alt=""
			src="{{asset('img/pp_user.jpg')}}"
			class="aspect-square h-full w-full object-cover"
			/>
		</div>
		@endif

		<div class="flex flex-1 flex-col justify-between">
			<div class="border-s border-gray-900/10 p-4 sm:border-l-transparent sm:p-6">
				<a href="{{ route('front.blog-detail', $bl->slug) }}">
					<h3 class="font-bold uppercase text-gray-900">
						{{ $bl->judul }}
					</h3>
				</a>

				<p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-700">
					{!! str_limit(strip_tags($bl->deskripsi), $limit = 50, $end = '...') !!}
				</p>
			</div>

			<div class="sm:flex sm:items-end sm:justify-end">
				<a href="{{ route('front.blog-detail', $bl->slug) }}" class="block bg-yellow-300 px-5 py-3 text-center text-xs font-bold uppercase text-gray-900 transition hover:bg-yellow-400">
					Baca Artikel
				</a>
			</div>
		</div>
	</article>
	@endforeach
</div>
@endsection