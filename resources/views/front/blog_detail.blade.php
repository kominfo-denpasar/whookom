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
				<h1 class="text-gray-900 font-bold text-3xl mb-2">{{ $blog->judul }}</h1>
				<p class="text-gray-700 text-xs mt-2">Ditulis Oleh:
					<a class="text-red-600 font-medium hover:text-gray-900 transition duration-500 ease-in-out">
						{{ $blog->name }}
					</a> Di
					<a class="text-xs text-red-600 font-medium hover:text-gray-900 transition duration-500 ease-in-out">
						Artikel
					</a>
					Pada 
					<a class="text-xs text-red-600 font-medium hover:text-gray-900 transition duration-500 ease-in-out">
						{{ \Carbon\Carbon::parse($blog->updated_at)->format('d/m/Y')}}
					</a>
					

				</p>

				<div class="leading-2 my-5 text-base">
					{!! $blog->deskripsi !!}
				</div>

				<div class="py-4">
					<hr>
				</div>
				<!-- AddToAny BEGIN -->
				<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
					<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
					<a class="a2a_button_facebook"></a>
					<a class="a2a_button_whatsapp"></a>
					<a class="a2a_button_email"></a>
					<a class="a2a_button_telegram"></a>
					<a class="a2a_button_facebook_messenger"></a>
				</div>
				<script>
					var a2a_config = a2a_config || {};
					a2a_config.locale = "id";
				</script>
				<script defer src="https://static.addtoany.com/menu/page.js"></script>
				<!-- AddToAny END -->
				<div class="py-4">
					<hr>
				</div>

				<div id="disqus_thread"></div>


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

@push('script')
<script>
    /**
    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
    /*
    var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://dmb-2.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
@endpush