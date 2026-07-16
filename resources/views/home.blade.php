@extends('layouts.app')

@section('title', 'Bosh sahifa - SuperMarket')

@section('content')
    <div class="space-y-16">

        <!-- Banner / Hero Section -->
        <section class="relative bg-gradient-to-br from-green-600 to-green-700 rounded-2xl overflow-hidden shadow-2xl">
            <div class="container mx-auto px-6 py-16 md:py-24 flex flex-col md:flex-row items-center gap-8">
                <!-- Left Content -->
                <div class="flex-1 text-white space-y-6">
                    <span
                        class="inline-flex items-center gap-2 bg-yellow-400 text-green-900 px-4 py-1.5 rounded-full text-sm font-semibold">
                        <i data-lucide="zap" class="w-4 h-4"></i>
                        Maxsus taklif
                    </span>
                    <h1 class="text-4xl md:text-6xl font-bold leading-tight">
                        Sifatli mahsulotlar,
                        <span class="text-yellow-300">qulay narxlar!</span>
                    </h1>
                    <p class="text-green-100 text-lg max-w-lg">
                        5000+ dan ortiq mahsulotlar, tezkor yetkazib berish va eng yaxshi narxlar. Xarid qilish endi yanada
                        oson!
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="/products"
                            class="inline-flex items-center gap-2 bg-white text-green-700 px-8 py-3.5 rounded-xl font-semibold hover:bg-yellow-300 hover:text-green-900 transform hover:-translate-y-1 transition-all duration-300 shadow-lg">
                            <i data-lucide="shopping-bag" class="w-5 h-5"></i>
                            Xarid qilish
                        </a>
                        <a href="/products"
                            class="inline-flex items-center gap-2 bg-white/20 backdrop-blur-sm text-white px-8 py-3.5 rounded-xl font-semibold hover:bg-white/30 transform hover:-translate-y-1 transition-all duration-300 border border-white/30">
                            <i data-lucide="percent" class="w-5 h-5"></i>
                            Aksiyalar
                        </a>
                    </div>
                    <!-- Stats -->
                    <div class="flex gap-8 pt-4">
                        <div>
                            <div class="text-3xl font-bold text-yellow-300">5000+</div>
                            <div class="text-green-100 text-sm">Mahsulotlar</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold text-yellow-300">24/7</div>
                            <div class="text-green-100 text-sm">Yetkazib berish</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold text-yellow-300">10K+</div>
                            <div class="text-green-100 text-sm">Mijozlar</div>
                        </div>
                    </div>
                </div>
                <!-- Right Image -->
                <div class="flex-1 relative">
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8">
                        <img src="https://images.unsplash.com/photo-1542838132-92c53300491e?w=600" alt="Fresh products"
                            class="w-full h-auto rounded-xl shadow-lg">
                    </div>
                    <!-- Floating Badge -->
                    <div
                        class="absolute -top-4 -right-4 bg-red-500 text-white px-6 py-3 rounded-xl shadow-lg animate-bounce">
                        <div class="text-2xl font-bold">-30%</div>
                        <div class="text-xs">chegirma</div>
                    </div>
                </div>
            </div>
            <!-- Decorative Circles -->
            <div class="absolute top-0 right-0 w-64 h-64 bg-yellow-400/10 rounded-full -translate-y-1/2 translate-x-1/2">
            </div>
            <div class="absolute bottom-0 left-0 w-48 h-48 bg-white/5 rounded-full translate-y-1/2 -translate-x-1/2"></div>
        </section>

        <!-- Kategoriyalar -->
        <section>
            <div class="flex justify-between items-center mb-8">
                <div>
                    <h2 class="text-3xl font-bold text-gray-800 flex items-center gap-3">
                        <i data-lucide="grid" class="w-8 h-8 text-green-600"></i>
                        Kategoriyalar
                    </h2>
                    <p class="text-gray-500 mt-2">Kerakli kategoriyani tanlang</p>
                </div>
                <a href="/categories" class="text-green-600 hover:text-green-700 font-medium flex items-center gap-1 group">
                    Barchasi
                    <i data-lucide="arrow-right" class="w-4 h-4 group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
                <!-- Category Card 1 -->
                <a href="/category/meva"
                    class="group bg-white rounded-xl p-6 text-center hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300">
                    <div
                        class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:bg-red-200 transition-colors">
                        <i data-lucide="apple" class="w-8 h-8 text-red-600"></i>
                    </div>
                    <h3 class="font-semibold text-gray-800">Meva va sabzavotlar</h3>
                    <p class="text-sm text-gray-500 mt-1">120 ta mahsulot</p>
                </a>
                <!-- Category Card 2 -->
                <a href="/category/sut"
                    class="group bg-white rounded-xl p-6 text-center hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300">
                    <div
                        class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:bg-blue-200 transition-colors">
                        <i data-lucide="milk" class="w-8 h-8 text-blue-600"></i>
                    </div>
                    <h3 class="font-semibold text-gray-800">Sut mahsulotlari</h3>
                    <p class="text-sm text-gray-500 mt-1">85 ta mahsulot</p>
                </a>
                <!-- Category Card 3 -->
                <a href="/category/non"
                    class="group bg-white rounded-xl p-6 text-center hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300">
                    <div
                        class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:bg-yellow-200 transition-colors">
                        <i data-lucide="croissant" class="w-8 h-8 text-yellow-600"></i>
                    </div>
                    <h3 class="font-semibold text-gray-800">Non mahsulotlari</h3>
                    <p class="text-sm text-gray-500 mt-1">64 ta mahsulot</p>
                </a>
                <!-- Category Card 4 -->
                <a href="/category/gosht"
                    class="group bg-white rounded-xl p-6 text-center hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300">
                    <div
                        class="w-16 h-16 bg-pink-100 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:bg-pink-200 transition-colors">
                        <i data-lucide="beef" class="w-8 h-8 text-pink-600"></i>
                    </div>
                    <h3 class="font-semibold text-gray-800">Go'sht mahsulotlari</h3>
                    <p class="text-sm text-gray-500 mt-1">45 ta mahsulot</p>
                </a>
                <!-- Category Card 5 -->
                <a href="/category/ichimlik"
                    class="group bg-white rounded-xl p-6 text-center hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300">
                    <div
                        class="w-16 h-16 bg-cyan-100 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:bg-cyan-200 transition-colors">
                        <i data-lucide="cup-soda" class="w-8 h-8 text-cyan-600"></i>
                    </div>
                    <h3 class="font-semibold text-gray-800">Ichimliklar</h3>
                    <p class="text-sm text-gray-500 mt-1">95 ta mahsulot</p>
                </a>
                <!-- Category Card 6 -->
                <a href="/category/shirinlik"
                    class="group bg-white rounded-xl p-6 text-center hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300">
                    <div
                        class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:bg-purple-200 transition-colors">
                        <i data-lucide="candy" class="w-8 h-8 text-purple-600"></i>
                    </div>
                    <h3 class="font-semibold text-gray-800">Shirinliklar</h3>
                    <p class="text-sm text-gray-500 mt-1">72 ta mahsulot</p>
                </a>
            </div>
        </section>

        <!-- Aksiyalar -->
        <section>
            <div
                class="bg-gradient-to-r from-red-500 to-orange-500 rounded-2xl p-8 md:p-12 text-white relative overflow-hidden">
                <div class="relative z-10">
                    <div class="flex flex-col md:flex-row justify-between items-center gap-6">
                        <div class="space-y-4">
                            <span
                                class="inline-flex items-center gap-2 bg-white/20 backdrop-blur-sm px-4 py-1.5 rounded-full text-sm font-semibold">
                                <i data-lucide="clock" class="w-4 h-4"></i>
                                Cheklangan vaqt
                            </span>
                            <h2 class="text-4xl md:text-5xl font-bold">Katta chegirma!</h2>
                            <p class="text-xl text-orange-100">Barcha meva va sabzavotlarga 30% gacha chegirma</p>
                            <div class="flex gap-4">
                                <div class="bg-white/20 backdrop-blur-sm rounded-lg px-4 py-2 text-center">
                                    <div class="text-3xl font-bold">05</div>
                                    <div class="text-xs">Kun</div>
                                </div>
                                <div class="bg-white/20 backdrop-blur-sm rounded-lg px-4 py-2 text-center">
                                    <div class="text-3xl font-bold">12</div>
                                    <div class="text-xs">Soat</div>
                                </div>
                                <div class="bg-white/20 backdrop-blur-sm rounded-lg px-4 py-2 text-center">
                                    <div class="text-3xl font-bold">45</div>
                                    <div class="text-xs">Daqiqa</div>
                                </div>
                            </div>
                            <a href="/sales"
                                class="inline-flex items-center gap-2 bg-white text-red-600 px-8 py-3 rounded-xl font-semibold hover:bg-yellow-300 hover:text-red-700 transform hover:-translate-y-1 transition-all duration-300">
                                <i data-lucide="shopping-cart" class="w-5 h-5"></i>
                                Xarid qilish
                            </a>
                        </div>
                        <div class="text-9xl opacity-30">
                            <i data-lucide="tags" class="w-32 h-32"></i>
                        </div>
                    </div>
                </div>
                <!-- Decorative -->
                <div class="absolute top-0 right-0 w-96 h-96 bg-white/10 rounded-full -translate-y-1/2 translate-x-1/2">
                </div>
                <div
                    class="absolute bottom-0 left-0 w-64 h-64 bg-yellow-400/20 rounded-full translate-y-1/2 -translate-x-1/2">
                </div>
            </div>
        </section>

        <!-- Mahsulotlar -->
        <section>
            <div class="flex justify-between items-center mb-8">
                <div>
                    <h2 class="text-3xl font-bold text-gray-800 flex items-center gap-3">
                        <i data-lucide="package" class="w-8 h-8 text-green-600"></i>
                        Mahsulotlar
                    </h2>
                    <p class="text-gray-500 mt-2">Eng yangi va mashhur mahsulotlar</p>
                </div>
                <a href="/products" class="text-green-600 hover:text-green-700 font-medium flex items-center gap-1 group">
                    Barchasi
                    <i data-lucide="arrow-right" class="w-4 h-4 group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>
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
        </section>

        <!-- Xususiyatlar / Nega biz? -->
        <section class="bg-white rounded-2xl p-12">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Nega aynan biz?</h2>
                <p class="text-gray-500">Bizning afzalliklarimiz</p>
            </div>
            <div class="grid md:grid-cols-4 gap-8">
                <div class="text-center space-y-3">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto">
                        <i data-lucide="truck" class="w-8 h-8 text-green-600"></i>
                    </div>
                    <h3 class="font-semibold text-gray-800">Tezkor yetkazish</h3>
                    <p class="text-sm text-gray-500">Buyurtmangiz 24 soat ichida yetkaziladi</p>
                </div>
                <div class="text-center space-y-3">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto">
                        <i data-lucide="shield-check" class="w-8 h-8 text-green-600"></i>
                    </div>
                    <h3 class="font-semibold text-gray-800">Sifat kafolati</h3>
                    <p class="text-sm text-gray-500">100% sifatli mahsulotlar</p>
                </div>
                <div class="text-center space-y-3">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto">
                        <i data-lucide="wallet" class="w-8 h-8 text-green-600"></i>
                    </div>
                    <h3 class="font-semibold text-gray-800">Qulay narxlar</h3>
                    <p class="text-sm text-gray-500">Bozordagi eng arzon narxlar</p>
                </div>
                <div class="text-center space-y-3">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto">
                        <i data-lucide="headphones" class="w-8 h-8 text-green-600"></i>
                    </div>
                    <h3 class="font-semibold text-gray-800">24/7 Qo'llab-quvvatlash</h3>
                    <p class="text-sm text-gray-500">Har doim yordamga tayyormiz</p>
                </div>
            </div>
        </section>

    </div>

    <script>
        // Initialize Lucide icons after page load
        document.addEventListener('DOMContentLoaded', function () {
            lucide.createIcons();
        });
    </script>
@endsection