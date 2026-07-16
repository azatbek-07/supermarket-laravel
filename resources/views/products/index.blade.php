@extends('layouts.app')

@section('title', 'Mahsulotlar - SuperMarket')

@section('content')
    <div class="space-y-8">

        <!-- Page Header -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
            <div>
                <h1 class="text-4xl font-bold text-gray-800 flex items-center gap-3">
                    <i data-lucide="package" class="w-10 h-10 text-green-600"></i>
                    Mahsulotlar
                </h1>
                <p class="text-gray-500 mt-2">Barcha mahsulotlarni ko'rish</p>
            </div>
            <div class="flex items-center gap-3">
                <span class="text-gray-600">
                    <i data-lucide="layers" class="w-5 h-5 inline"></i>
                    Jami: <strong class="text-green-600">48 ta</strong> mahsulot
                </span>
            </div>
        </div>

        <!-- Search and Filter Bar -->
        <div class="bg-white rounded-2xl p-6 shadow-md">
            <div class="flex flex-col lg:flex-row gap-4">
                <!-- Search Input -->
                <div class="flex-1 relative">
                    <i data-lucide="search" class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400"></i>
                    <input type="text" placeholder="Mahsulot qidirish..."
                        class="w-full pl-12 pr-4 py-3 rounded-xl border border-gray-200 focus:border-green-500 focus:ring-2 focus:ring-green-200 outline-none transition-all">
                </div>

                <!-- Category Filter -->
                <div class="relative">
                    <select
                        class="appearance-none pl-4 pr-10 py-3 rounded-xl border border-gray-200 focus:border-green-500 focus:ring-2 focus:ring-green-200 outline-none transition-all bg-white">
                        <option value="">Barcha kategoriyalar</option>
                        <option value="meva">Meva va sabzavotlar</option>
                        <option value="sut">Sut mahsulotlari</option>
                        <option value="non">Non mahsulotlari</option>
                        <option value="gosht">Go'sht mahsulotlari</option>
                        <option value="ichimlik">Ichimliklar</option>
                        <option value="shirinlik">Shirinliklar</option>
                    </select>
                    <i data-lucide="chevron-down"
                        class="absolute right-3 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400 pointer-events-none"></i>
                </div>

                <!-- Sort Filter -->
                <div class="relative">
                    <select
                        class="appearance-none pl-4 pr-10 py-3 rounded-xl border border-gray-200 focus:border-green-500 focus:ring-2 focus:ring-green-200 outline-none transition-all bg-white">
                        <option value="newest">Eng yangi</option>
                        <option value="popular">Eng mashhur</option>
                        <option value="price-asc">Narx: arzondan qimmatga</option>
                        <option value="price-desc">Narx: qimmatdan arzonga</option>
                        <option value="name">Nomi bo'yicha</option>
                    </select>
                    <i data-lucide="arrow-up-down"
                        class="absolute right-3 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400 pointer-events-none"></i>
                </div>
            </div>

            <!-- Active Filters -->
            <div class="flex flex-wrap gap-2 mt-4">
                <span class="inline-flex items-center gap-2 bg-green-50 text-green-700 px-3 py-1.5 rounded-lg text-sm">
                    <i data-lucide="filter" class="w-3.5 h-3.5"></i>
                    Barcha mahsulotlar
                </span>
            </div>
        </div>

        <!-- Products Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

             @foreach ($products as $product)
                    <div
                        class="bg-white rounded-xl shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300 overflow-hidden group">

                        <div class="relative bg-gray-100">

                            <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="w-full h-48 object-cover">

                            @if($product['badge'] == 'Yangi')
                                <span
                                    class="absolute top-3 left-3 bg-green-500 text-white px-3 py-1 rounded-full text-xs font-semibold">
                                    {{ $product['badge'] }}
                                </span>

                            @elseif($product['badge'] == 'Chegirma')
                                <span
                                    class="absolute top-3 left-3 bg-red-500 text-white px-3 py-1 rounded-full text-xs font-semibold">
                                    {{ $product['badge'] }}
                                </span>

                            @else
                                <span
                                    class="absolute top-3 left-3 bg-orange-500 text-white px-3 py-1 rounded-full text-xs font-semibold">
                                    {{ $product['badge'] }}
                                </span>
                            @endif

                            <button
                                class="absolute top-3 right-3 w-8 h-8 bg-white rounded-full flex items-center justify-center hover:bg-red-50 hover:text-red-500">
                                <i data-lucide="heart" class="w-4 h-4"></i>
                            </button>

                        </div>

                        <div class="p-5">

                            <h3 class="font-semibold text-gray-800 mb-2">
                                {{ $product['name'] }}
                            </h3>

                            <p class="text-sm text-gray-500 mb-4">
                                {{ $product['description'] }}
                            </p>

                            <div class="flex justify-between items-center">

                                <div>
                                    <span class="text-2xl font-bold text-green-600">
                                        {{ number_format($product['price'], 0, ',', ' ') }}
                                    </span>

                                    <span class="text-sm text-gray-400">
                                        so'm
                                    </span>
                                </div>

                                <a href="/products/{{ $product['id'] }}"
                                    class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition">
                                    Batafsil
                                </a>

                            </div>

                        </div>

                    </div>
                @endforeach

        </div>

        <!-- Pagination -->
        <div class="flex justify-center items-center gap-2 pt-8">
            <button
                class="w-10 h-10 rounded-lg border border-gray-300 flex items-center justify-center hover:bg-gray-50 transition-colors disabled:opacity-50 disabled:cursor-not-allowed"
                disabled>
                <i data-lucide="chevron-left" class="w-5 h-5 text-gray-600"></i>
            </button>

            <button class="w-10 h-10 rounded-lg bg-green-600 text-white font-medium">1</button>
            <button
                class="w-10 h-10 rounded-lg border border-gray-300 hover:bg-gray-50 transition-colors font-medium text-gray-700">2</button>
            <button
                class="w-10 h-10 rounded-lg border border-gray-300 hover:bg-gray-50 transition-colors font-medium text-gray-700">3</button>
            <span class="px-2 text-gray-400">...</span>
            <button
                class="w-10 h-10 rounded-lg border border-gray-300 hover:bg-gray-50 transition-colors font-medium text-gray-700">6</button>

            <button
                class="w-10 h-10 rounded-lg border border-gray-300 flex items-center justify-center hover:bg-gray-50 transition-colors">
                <i data-lucide="chevron-right" class="w-5 h-5 text-gray-600"></i>
            </button>
        </div>

    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            lucide.createIcons();
        });
    </script>
@endsection