@extends('front.layouts.app')

@section('content')
	<!-- <section class="is-title-bar">
		<div class="flex flex-col items-center justify-between space-y-6 md:flex-row md:space-y-0">
		<ul>
		<li>Admin</li>
		<li>Dashboard</li>
		</ul>
		<a
		href="https://github.com/justboil/admin-one-tailwind"
		target="_blank"
		class="button blue">
		<span class="icon">
		<i class="mdi mdi-github-circle"></i>
		</span>
		<span>GitHub</span>
		</a>
		</div>
	</section> -->

	<section
		class="relative bg-cover bg-center bg-no-repeat"
		style="background-image: url('{{ asset('img/banner_dmb.jpg') }}');">
		<div
			class="absolute inset-0 bg-white/75 lg:bg-transparent lg:from-white/95 lg:to-white/25 lg:bg-gradient-to-r sm:bg-gradient-to-l">
		</div>

		<div class="relative max-w-screen-xl px-4 py-32 mx-auto sm:px-6 lg:flex lg:h-screen lg:items-center lg:px-8">
			<div class="max-w-xl ltr:sm:text-left rtl:sm:text-right">
				<h1 class="text-3xl font-extrabold sm:text-5xl">
					"Setiap Kita,
					<strong class="block font-extrabold text-rose-700"> Berhak Bahagia" </strong>
				</h1>

				<p class="max-w-lg mt-4 sm:text-xl/relaxed">
					{{ __('front.intro') }}
				</p>

				<div class="flex flex-wrap gap-4 mt-8 text-center">
					<a href="{{ url('/survei') }}"
						class="block w-full px-12 py-3 text-lg font-medium text-white rounded shadow bg-rose-600 hover:bg-rose-700 focus:outline-none focus:ring active:bg-rose-500 sm:w-auto">
						{{ __('front.get_started') }}
					</a>
					<a href="{{ url('/survei') }}"
						class="block w-full px-12 py-3 text-lg font-medium text-black rounded shadow bg-gray-300 hover:bg-gray-400 focus:outline-none focus:ring active:bg-gray-300 sm:w-auto">
						{{ __('front.alt_intro') }}
					</a>
				</div>
			</div>
		</div>
	</section>

	<section class="section main-section">

		<div class="w-full bg-white">

			<div class="px-6 py-8 mx-auto max-w-7xl lg:px-8">
				<div class="max-w-2xl mx-auto text-center">
					<h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{{ __('front.blog_title') }}
					</h2>
					<p class="mt-2 text-lg leading-8 text-gray-600">
						{{ __('front.blog_desc') }}
					</p>
				</div>
				<div
					class="grid max-w-2xl grid-cols-1 gap-8 mx-auto mt-8 auto-rows-fr sm:mt-12 lg:mx-0 lg:max-w-none lg:grid-cols-3 ">
					@foreach($blog as $b)
					<!-- First blog post -->
					<article
						class="relative flex flex-col justify-end px-8 py-8 pb-8 overflow-hidden bg-gray-900 isolate rounded-2xl dark:bg-gray-700 pt-80 sm:pt-48 lg:pt-80">
						@if(file_exists(storage_path('app/public/uploads/blog/'.$b->gambar)))
							<img src="{{ asset('storage/uploads/blog/'.$b->gambar) }}" alt="Gambar {{$b->judul}}" class="absolute inset-0 object-cover w-full h-full -z-10">
						@else
							<img src="{{ asset('img/pp_user.jpg') }}" alt="Gambar {{$b->judul}}" class="absolute inset-0 object-cover w-full h-full -z-10">
						@endif
						<div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
						<div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
						<div class="flex flex-wrap items-center overflow-hidden text-sm leading-6 text-gray-300 gap-y-1">
							<time datetime="2023-10-11" class="mr-8">
							{{ \Carbon\Carbon::parse($b->updated_at)->format('d/m/Y')}}<br>
							{{$b->name}}
							</time>
						</div>
						<h3 class="mt-3 text-lg font-semibold leading-6 text-white">
							<a href="{{route('front.blog-detail', $b->slug)}}"><span class="absolute inset-0"></span>{{$b->judul}}</a>
						</h3>
					</article>
					@endforeach
					<!-- More blog posts can be added similarly -->
				</div>

				<div class="align-middle text-center">
					<!-- Base -->
					<a href="{{route('front.blog-list')}}" class="mt-4 mb-2 group relative inline-block focus:outline-none focus:ring">
						<span
							class="absolute inset-0 translate-x-1.5 translate-y-1.5 bg-yellow-300 transition-transform group-hover:translate-x-0 group-hover:translate-y-0"
						></span>

						<span
							class="relative inline-block border-2 border-current px-8 py-3 text-sm font-bold tracking-widest text-black group-active:text-opacity-75">
							Artikel Lainnya
						</span>
					</a>
				</div>
			</div>

		</div>
	</section>


	<section class="bg-white">
		<div class="max-w-screen-xl px-4 py-12 mx-auto sm:px-6 lg:px-8 lg:py-16">
			<h2 class="text-3xl font-bold tracking-tight text-center text-gray-900 sm:text-4xl">
				{{ trans('front.psi_title') }}
			</h2>
			<p class="mt-2 text-lg leading-8 text-center text-gray-600">
				{{ trans('front.psi_desc') }}
			</p>

			<div class="mt-8 [column-fill:_balance] sm:columns-2 sm:gap-6 lg:columns-3 lg:gap-8">

			@foreach($psikolog as $data)
				<div class="mb-8 sm:break-inside-avoid">
					<blockquote class="p-6 rounded-lg shadow-sm bg-gray-50 sm:p-8">
						<div class="flex items-center gap-4">
							<img alt=""
								src="{{ asset('img/pp_user.jpg') }}"
								class="object-cover rounded-full" />
							
						</div>
						<p class="mt-0.5 text-lg text-center font-medium text-gray-900">{{ $data->nama }}</p>

						<p class="mt-4 text-gray-700">
							<!-- Lorem ipsum dolor sit, amet consectetur adipisicing elit. -->
						</p>
					</blockquote>
				</div>
			@endforeach

				
			</div>
		</div>
	</section>
@endsection
