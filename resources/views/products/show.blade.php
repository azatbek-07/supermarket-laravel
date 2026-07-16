@extends('layouts.app')

@section('title', $product['name'])

@section('content')

<div class="max-w-6xl mx-auto px-6 py-12">

    <a href="{{ route('products.index') }}"
       class="inline-flex items-center gap-2 text-green-600 hover:text-green-700 mb-8">
        ← Orqaga
    </a>

    <div class="bg-white rounded-2xl shadow-lg overflow-hidden md:flex">

        <div class="md:w-1/2">
            <img src="{{ $product['image'] }}"
                 alt="{{ $product['name'] }}"
                 class="w-full h-full object-cover">
        </div>

        <div class="md:w-1/2 p-8">

            <span class="inline-block bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm mb-4">
                {{ $product['badge'] }}
            </span>

            <h1 class="text-4xl font-bold text-gray-800 mb-4">
                {{ $product['name'] }}
            </h1>

            <p class="text-gray-600 leading-7 mb-6">
                {{ $product['description'] }}
            </p>

            <h2 class="text-3xl font-bold text-green-600 mb-8">
                {{ number_format($product['price'],0,',',' ') }} so'm
            </h2>

            <div class="flex gap-4">

                <button class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-lg">
                    🛒 Savatga qo'shish
                </button>

                <button class="border border-green-600 text-green-600 hover:bg-green-50 px-6 py-3 rounded-lg">
                    ❤️ Sevimlilar
                </button>

            </div>

        </div>

    </div>

</div>

@endsection