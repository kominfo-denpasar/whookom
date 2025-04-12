@extends('front.layouts.app')

@section('content')
	<section
		class="relative bg-cover bg-center bg-no-repeat">
		<div
			class="absolute inset-0 bg-white/75 lg:bg-transparent lg:from-white/95 lg:to-white/25 lg:bg-gradient-to-r sm:bg-gradient-to-l">
		</div>

		<div class="relative max-w-screen-xl px-4 py-32 mx-auto sm:px-6 lg:flex lg:h-screen lg:items-center lg:px-8">
			<div class="max-w-xl ltr:sm:text-left rtl:sm:text-right">
				<h1 class="text-3xl font-extrabold sm:text-5xl">
					Whookom
					<strong class="block font-extrabold text-rose-700"> Webhook App </strong>
				</h1>

				<p class="max-w-lg mt-4 sm:text-xl/relaxed">
					{{ __('front.intro') }}
				</p>

				<div class="flex flex-wrap gap-4 mt-8 text-center">
					<a href="{{ url('/login') }}"
						class="block w-full px-12 py-3 text-lg font-medium text-white rounded shadow bg-rose-600 hover:bg-rose-700 focus:outline-none focus:ring active:bg-rose-500 sm:w-auto">
						{{ __('front.get_started') }}
					</a>
				</div>
			</div>
		</div>
	</section>

@endsection
