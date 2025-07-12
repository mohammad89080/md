@extends('layouts.master')
@section('content')
    <style>
        body {
            background-color: #f8f8f8;
        }
    </style>
<div class="landing-about-us relative">
    <!-- Black overlay -->
    <div class="absolute inset-0 bg-black/20 "></div>

    <!-- Text content -->
    <div class="intro absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center w-full z-10">
        <h1 class="md:text-6xl font-bold mb-4 text-white">{{ $product->name }}</h1>
        <p class="text-white">Lorem ipsum dolor sit em asperiores, pariatur distinctio! Corrupti qui voluptate omnis quod.</p>
    </div>
</div>

<div class="container mx-auto px-4 py-12">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
        
        <!-- صورة المنتج -->
        <div class="rounded-2xl overflow-hidden shadow-2xl border border-gray-200">
            <img src="{{ asset('storage/products/' . $product->image) }}"
                 alt="{{ $product->name }}"
                 class="w-full h-80 md:h-[500px] object-cover transition-transform duration-500 hover:scale-105">
        </div>

        <!-- معلومات المنتج -->
        <div class="px-2 md:px-6" data-aos="zoom-in-up" data-aos-delay="400">
            <h1 class="text-3xl font-extrabold mb-6 text-gray-800">{{ $product->name }}</h1>

            <p class="text-gray-700 text-lg leading-relaxed tracking-wide">
                {{ $product->description }}
            </p>
        </div>
    </div>
</div>

<div class="container mx-auto px-4 py-8">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        @foreach ($products as $product)
            <div class="w-full" data-aos="zoom-in-up" data-aos-delay="400">
                <a href="{{ route('product.show', $product->slug) }}">
                    <div class="bg-black text-white rounded-3xl overflow-hidden border-2 shadow-xl relative transform transition-transform duration-500 hover:scale-105">
                        <img src="{{ asset('storage/products/' . $product->image) }}"
                             class="w-full h-64 object-cover opacity-90" />
                        <div class="p-4 absolute inset-0 flex flex-col justify-center px-4 bg-black/40">
                            <h2 class="font-semibold text-sm text-white">{{ $product->name }}</h2>
                            <p class="text-xs text-white mt-2">
                                {{ Str::limit($product->description, 150) }}
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>


    {{-- <div class="container mx-auto px-4 py-8">
    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
        <img src="{{ asset('storage/products/' . $product->image) }}" class="w-full h-96 object-cover">
        <div class="p-6">
            <h1 class="text-2xl font-bold mb-4">{{ $product->name }}</h1>
            <p class="text-gray-700">{{ $product->description }}</p>
        </div>
    </div>
</div> --}}
@endsection
