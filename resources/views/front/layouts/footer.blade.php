<!-- <footer class="footer">
	<div class="flex flex-col items-center justify-between space-y-3">
		<div class="flex items-center justify-start space-x-3">
			<div>
				@if(date('Y')=='2025')
					{{ date('Y') }} &copy; Pemerintah Kota Denpasar
				@else
					2025 - {{ date('Y') }} &copy; Pemerintah Kota Denpasar
				@endif

			</div>
			<a href="https://github.com/kominfo-denpasar/dmb" style="height: 20px">
				<img src="https://img.shields.io/badge/dmb-v0.0.2-red">
			</a>
		</div>
		<a href="#!">
		</a>
	</div>
</footer> -->

<footer class="mx-auto w-full max-w-container px-4 sm:px-6 lg:px-8">
    <div class="border-t border-slate-50 py-4">
		<!-- <img class="shrink-0 p-3 h-16 mx-auto" src="{{ asset('img/logo_dmb.png') }}"> -->
		<div class="mt-2 flex items-center justify-center space-x-4 text-sm font-semibold leading-6 text-slate-700">
			<a class="text-red-600" href="{{url('/privasi')}}">Kebijakan Privasi</a>
			<div class="h-4 w-px bg-slate-500/20"></div>
			<a class="text-red-600" href="{{url('/faq')}}">FAQ</a>
			<div class="h-4 w-px bg-slate-500/20"></div>
			<a class="text-red-600" href="{{url('/artikel')}}">Artikel & Tips</a>
        </div>

		@if(date('Y')=='2025')
			<p class="mt-2 text-center text-sm leading-6 text-slate-500">Copyright &copy; {{ date('Y') }} Pemerintah Kota Denpasar.</p>
		@else
			<p class="mt-2 text-center text-sm leading-6 text-slate-500">Copyright &copy; 2025 - {{ date('Y') }} Pemerintah Kota Denpasar. </p>
		@endif
    </div>
</footer>

<div id="sample-modal" class="modal">
	<div class="modal-background --jb-modal-close"></div>
	<div class="modal-card">
		<header class="modal-card-head">
			<p class="modal-card-title">Sample modal</p>
		</header>
		<section class="modal-card-body">
			<p>Lorem ipsum dolor sit amet <b>adipiscing elit</b></p>
			<p>This is sample modal</p>
		</section>
		<footer class="modal-card-foot">
			<button class="button --jb-modal-close">Cancel</button>
			<button class="button red --jb-modal-close">Confirm</button>
		</footer>
	</div>
</div>