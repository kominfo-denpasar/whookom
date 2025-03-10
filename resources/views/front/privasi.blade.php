@extends('front.layouts.app')

@section('content')
<div class="relative p-4 mt-10">
    <div class="max-w-3xl mx-auto">
        <div
            class="mt-3 bg-white rounded-b lg:rounded-b-none lg:rounded-r flex flex-col justify-between leading-normal">
            <div class="p-6 faq">

                <a href="{{ url('/') }}" class="text-red-600 hover:text-gray-700 transition duration-500 ease-in-out text-sm">
                    Beranda
                </a>
                <a>> <span class="text-gray-900">Kebijakan Privasi</span></a>

                <h1 href="#" class="text-gray-900 font-bold text-4xl">Kebijakan Privasi</h1>
                <div class="py-5 text-sm font-regular text-gray-900 flex">
                    <span class="ml-1">Halaman ini diupdate: {{ \Carbon\Carbon::parse($data->updated_at)->format('d M Y')}}</span></a>
                </div>
                <hr>

                <p class="text-base leading-8 my-5">
                    {!! $data->value !!}
                </p>

            </div>

        </div>
    </div>
</div>
@endsection