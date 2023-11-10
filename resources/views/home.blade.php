@extends('layouts.app')

@section('content')
    <div class="grid grid-cols-4 gap-4">
        {{-- Foreach --}}
        <div class="max-w-2xl mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl w-96">
            <a href="/">
                <div class="md:flex">
                    <div class="md:flex-shrink-0">
                        <img class="h-48 w-full object-cover md:w-48"
                            src="https://imgx.gridoto.com/crop/0x0:0x0/700x465/filters:watermark(file/2017/gridoto/img/watermark.png,5,5,60)/photo/2022/07/27/screenshot_20220727-153151_galle-20220727033206.jpg"
                            alt="car image">
                    </div>
                    <div class="p-5 pt-4 h-48">
                        <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Mitsubishi</div>
                        <div class="block mt-1 text-lg leading-tight font-medium text-black ">Pajero
                            Sport
                        </div>
                        <p class="text-gray-500">D 40192 IN</p>
                        <div class="mt-2">
                            <span class="text-gray-500">Tahun:</span> <span class="font-medium text-black">2019</span>
                        </div>
                        <div class="mt-2">
                            <span class="text-gray-500">Harga Rental /hari:</span>
                            <span class="font-medium text-black">Rp2.000.000</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        {{-- endforeach --}}
    </div>
@endsection
