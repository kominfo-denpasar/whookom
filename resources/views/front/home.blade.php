@extends('front.layouts.app')

@section('content')

<!-- <section class="is-title-bar"> 
	<div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
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

<!--
  Heads up! 👋

  This component comes with some `rtl` classes. Please remove them if they are not needed in your project.
-->

<!--
  Heads up! 👋

  This component comes with some `rtl` classes. Please remove them if they are not needed in your project.
-->

<section class="relative bg-[url(https://images.unsplash.com/photo-1604014237800-1c9102c219da?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80)] bg-cover bg-center bg-no-repeat">
	
	<div class="absolute inset-0 bg-white/75 lg:bg-transparent lg:from-white/95 lg:to-white/25 lg:bg-gradient-to-r sm:bg-gradient-to-l"></div>

	<div class="relative mx-auto max-w-screen-xl px-4 py-32 sm:px-6 lg:flex lg:h-screen lg:items-center lg:px-8">
		<div class="max-w-xl ltr:sm:text-left rtl:sm:text-right">
			<h1 class="text-3xl font-extrabold sm:text-5xl">
				Denpasar
				<strong class="block font-extrabold text-rose-700"> Menyama Bagia. </strong>
			</h1>

			<p class="mt-4 max-w-lg sm:text-xl/relaxed">
				{{trans('front.intro')}}
			</p>

			<div class="mt-8 flex flex-wrap gap-4 text-center">
				<a href="#" class="block w-full rounded bg-rose-600 px-12 py-3 text-sm font-medium text-white shadow hover:bg-rose-700 focus:outline-none focus:ring active:bg-rose-500 sm:w-auto">
					{{trans('front.get_started')}}
				</a>
				<a href="#" class="block w-full rounded bg-white px-12 py-3 text-sm font-medium text-rose-600 shadow hover:text-rose-700 focus:outline-none focus:ring active:text-rose-500 sm:w-auto">
					{{trans('front.learn_more')}}
				</a>
			</div>
		</div>
	</div>
</section>

<section class="section main-section">

	<div class="w-full bg-white">

		<div class="mx-auto max-w-7xl px-6 lg:px-8 pt-8">
			<div class="mx-auto max-w-2xl text-center">
				<h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{{ trans('front.blog_title') }}</h2>
				<p class="mt-2 text-lg leading-8 text-gray-600">
				{{ trans('front.blog_desc') }}
				</p>
			</div>
			<div
				class="mx-auto mt-8 grid max-w-2xl auto-rows-fr grid-cols-1 gap-8 sm:mt-12 lg:mx-0 lg:max-w-none lg:grid-cols-3 ">
				<!-- First blog post -->
				<article
					class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl bg-gray-900 dark:bg-gray-700 px-8 py-8 pb-8 pt-80 sm:pt-48 lg:pt-80">
					<img src="https://images.unsplash.com/photo-1677442135703-1787eea5ce01?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw1fHxhaXxlbnwwfDB8fHwxNzEyNzUzMTQ4fDA&ixlib=rb-4.0.3&q=80&w=1080" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover">
					<div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
					<div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
					<div class="flex flex-wrap items-center gap-y-1 overflow-hidden text-sm leading-6 text-gray-300"><time
							datetime="2023-10-11" class="mr-8">Oct 11, 2023</time>
						<div class="-ml-4 flex items-center gap-x-4"><svg viewBox="0 0 2 2"
								class="-ml-0.5 h-0.5 w-0.5 flex-none fill-white/50">
								<circle cx="1" cy="1" r="1"></circle>
							</svg>
							<div class="flex gap-x-2.5">
								<img src="https://randomuser.me/api/portraits/men/2.jpg" alt="" class="h-6 w-6 flex-none rounded-full bg-white/10">John
							</div>
						</div>
					</div>
					<h3 class="mt-3 text-lg font-semibold leading-6 text-white">
						<a href="/tech-blog/post1"><span class="absolute inset-0"></span>The Future of Artificial
							Intelligence: Trends and Challenges</a>
					</h3>
				</article>
				<!-- Second blog post -->
				<article
					class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl bg-gray-900 dark:bg-gray-700 px-8 py-8 pb-8 pt-80 sm:pt-48 lg:pt-80">
					<img src="https://images.unsplash.com/photo-1639322537228-f710d846310a?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw1fHxibG9jayUyMGNoYWlufGVufDB8MHx8fDE3MTI3NTMxNjd8MA&ixlib=rb-4.0.3&q=80&w=1080" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover">
					<div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
					<div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
					<div class="flex flex-wrap items-center gap-y-1 overflow-hidden text-sm leading-6 text-gray-300"><time
							datetime="2023-09-25" class="mr-8">Sept 25, 2023</time>
						<div class="-ml-4 flex items-center gap-x-4"><svg viewBox="0 0 2 2"
								class="-ml-0.5 h-0.5 w-0.5 flex-none fill-white/50">
								<circle cx="1" cy="1" r="1"></circle>
							</svg>
							<div class="flex gap-x-2.5">
								<img src="https://randomuser.me/api/portraits/women/2.jpg" alt="" class="h-6 w-6 flex-none rounded-full bg-white/10">Jane
							</div>
						</div>
					</div>
					<h3 class="mt-3 text-lg font-semibold leading-6 text-white">
						<a href="/tech-blog/post2"><span class="absolute inset-0"></span>The Rise of Blockchain Technology:
							A Comprehensive Guide</a>
					</h3>
				</article>
				<!-- Third blog post -->
				<article
					class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl bg-gray-900 dark:bg-gray-700 px-8 py-8 pb-8 pt-80 sm:pt-48 lg:pt-80">
					<img src="https://images.unsplash.com/photo-1666112835156-c65bb806ac73?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxNXx8cXVhbnR1bSUyMGNvbXB1dGluZ3xlbnwwfDB8fHwxNzEyNzUzMTk2fDA&ixlib=rb-4.0.3&q=80&w=1080" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover">
					<div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
					<div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
					<div class="flex flex-wrap items-center gap-y-1 overflow-hidden text-sm leading-6 text-gray-300"><time
							datetime="2023-09-24" class="mr-8">Sept 24, 2023</time>
						<div class="-ml-4 flex items-center gap-x-4"><svg viewBox="0 0 2 2"
								class="-ml-0.5 h-0.5 w-0.5 flex-none fill-white/50">
								<circle cx="1" cy="1" r="1"></circle>
							</svg>
							<div class="flex gap-x-2.5">
								<img src="https://randomuser.me/api/portraits/men/4.jpg" alt="" class="h-6 w-6 flex-none rounded-full bg-white/10">Michael
							</div>
						</div>
					</div>
					<h3 class="mt-3 text-lg font-semibold leading-6 text-white">
						<a href="/tech-blog/post3"><span class="absolute inset-0"></span>How Quantum Computing Will
							Revolutionize Data Security</a>
					</h3>
				</article>
				<!-- More blog posts can be added similarly -->
			</div>
		</div>

	</div>
</section>
@endsection