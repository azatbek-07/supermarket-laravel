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
                <input type="text" 
                       placeholder="Mahsulot qidirish..." 
                       class="w-full pl-12 pr-4 py-3 rounded-xl border border-gray-200 focus:border-green-500 focus:ring-2 focus:ring-green-200 outline-none transition-all">
            </div>
            
            <!-- Category Filter -->
            <div class="relative">
                <select class="appearance-none pl-4 pr-10 py-3 rounded-xl border border-gray-200 focus:border-green-500 focus:ring-2 focus:ring-green-200 outline-none transition-all bg-white">
                    <option value="">Barcha kategoriyalar</option>
                    <option value="meva">Meva va sabzavotlar</option>
                    <option value="sut">Sut mahsulotlari</option>
                    <option value="non">Non mahsulotlari</option>
                    <option value="gosht">Go'sht mahsulotlari</option>
                    <option value="ichimlik">Ichimliklar</option>
                    <option value="shirinlik">Shirinliklar</option>
                </select>
                <i data-lucide="chevron-down" class="absolute right-3 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400 pointer-events-none"></i>
            </div>

            <!-- Sort Filter -->
            <div class="relative">
                <select class="appearance-none pl-4 pr-10 py-3 rounded-xl border border-gray-200 focus:border-green-500 focus:ring-2 focus:ring-green-200 outline-none transition-all bg-white">
                    <option value="newest">Eng yangi</option>
                    <option value="popular">Eng mashhur</option>
                    <option value="price-asc">Narx: arzondan qimmatga</option>
                    <option value="price-desc">Narx: qimmatdan arzonga</option>
                    <option value="name">Nomi bo'yicha</option>
                </select>
                <i data-lucide="arrow-up-down" class="absolute right-3 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400 pointer-events-none"></i>
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
        
        <!-- Product 1 -->
        <div class="bg-white rounded-xl shadow-md hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 overflow-hidden group">
            <div class="relative bg-gray-100">
                <img src="https://images.unsplash.com/photo-1568702846914-96b305d2aaeb?w=400&h=300&fit=crop" 
                     alt="Qizil olma" 
                     class="w-full h-48 object-cover"
                     onerror="this.src='https://placehold.co/400x300/ef4444/ffffff?text=🍎+Olma'">
                <span class="absolute top-3 left-3 bg-green-500 text-white px-3 py-1 rounded-full text-xs font-semibold shadow-lg">
                    <i data-lucide="badge-check" class="w-3 h-3 inline"></i> Yangi
                </span>
                <button class="absolute top-3 right-3 w-8 h-8 bg-white rounded-full flex items-center justify-center hover:bg-red-50 hover:text-red-500 transition-colors shadow-md">
                    <i data-lucide="heart" class="w-4 h-4"></i>
                </button>
            </div>
            <div class="p-5">
                <div class="flex items-center gap-1 mb-2">
                    <i data-lucide="star" class="w-4 h-4 text-yellow-400 fill-yellow-400"></i>
                    <i data-lucide="star" class="w-4 h-4 text-yellow-400 fill-yellow-400"></i>
                    <i data-lucide="star" class="w-4 h-4 text-yellow-400 fill-yellow-400"></i>
                    <i data-lucide="star" class="w-4 h-4 text-yellow-400 fill-yellow-400"></i>
                    <i data-lucide="star-half" class="w-4 h-4 text-yellow-400 fill-yellow-400"></i>
                    <span class="text-sm text-gray-500 ml-1">(45)</span>
                </div>
                <h3 class="font-semibold text-gray-800 mb-2">Qizil olma</h3>
                <p class="text-sm text-gray-500 mb-3">Yangi uzilgan, shirin</p>
                <div class="flex justify-between items-center">
                    <div>
                        <span class="text-2xl font-bold text-green-600">15,000</span>
                        <span class="text-sm text-gray-400"> so'm</span>
                    </div>
                    <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-colors flex items-center gap-1">
                        <i data-lucide="shopping-cart" class="w-4 h-4"></i>
                        Savatga
                    </button>
                </div>
            </div>
        </div>

        <!-- Product 2 -->
        <div class="bg-white rounded-xl shadow-md hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 overflow-hidden group">
            <div class="relative bg-gray-100">
                <img src="https://images.unsplash.com/photo-1563636619-e9143da7973b?w=400&h=300&fit=crop" 
                     alt="Sut" 
                     class="w-full h-48 object-cover"
                     onerror="this.src='https://placehold.co/400x300/3b82f6/ffffff?text=🥛+Sut'">
                <span class="absolute top-3 left-3 bg-blue-500 text-white px-3 py-1 rounded-full text-xs font-semibold shadow-lg">
                    <i data-lucide="package" class="w-3 h-3 inline"></i> Ommabop
                </span>
                <button class="absolute top-3 right-3 w-8 h-8 bg-white rounded-full flex items-center justify-center hover:bg-red-50 hover:text-red-500 transition-colors shadow-md">
                    <i data-lucide="heart" class="w-4 h-4"></i>
                </button>
            </div>
            <div class="p-5">
                <div class="flex items-center gap-1 mb-2">
                    <i data-lucide="star" class="w-4 h-4 text-yellow-400 fill-yellow-400"></i>
                    <i data-lucide="star" class="w-4 h-4 text-yellow-400 fill-yellow-400"></i>
                    <i data-lucide="star" class="w-4 h-4 text-yellow-400 fill-yellow-400"></i>
                    <i data-lucide="star" class="w-4 h-4 text-yellow-400 fill-yellow-400"></i>
                    <i data-lucide="star" class="w-4 h-4 text-yellow-400"></i>
                    <span class="text-sm text-gray-500 ml-1">(32)</span>
                </div>
                <h3 class="font-semibold text-gray-800 mb-2">Sut 3.2%</h3>
                <p class="text-sm text-gray-500 mb-3">1 litr, tabiiy</p>
                <div class="flex justify-between items-center">
                    <div>
                        <span class="text-2xl font-bold text-green-600">12,000</span>
                        <span class="text-sm text-gray-400"> so'm</span>
                    </div>
                    <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-colors flex items-center gap-1">
                        <i data-lucide="shopping-cart" class="w-4 h-4"></i>
                        Savatga
                    </button>
                </div>
            </div>
        </div>

        <!-- Product 3 -->
        <div class="bg-white rounded-xl shadow-md hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 overflow-hidden group">
            <div class="relative bg-gray-100">
                <img src="https://images.unsplash.com/photo-1549931319-a54579b3e610?w=400&h=300&fit=crop" 
                     alt="Tandir non" 
                     class="w-full h-48 object-cover"
                     onerror="this.src='https://placehold.co/400x300/f59e0b/ffffff?text=🍞+Non'">
                <span class="absolute top-3 left-3 bg-orange-500 text-white px-3 py-1 rounded-full text-xs font-semibold shadow-lg">
                    <i data-lucide="flame" class="w-3 h-3 inline"></i> Mashhur
                </span>
                <button class="absolute top-3 right-3 w-8 h-8 bg-white rounded-full flex items-center justify-center hover:bg-red-50 hover:text-red-500 transition-colors shadow-md">
                    <i data-lucide="heart" class="w-4 h-4"></i>
                </button>
            </div>
            <div class="p-5">
                <div class="flex items-center gap-1 mb-2">
                    <i data-lucide="star" class="w-4 h-4 text-yellow-400 fill-yellow-400"></i>
                    <i data-lucide="star" class="w-4 h-4 text-yellow-400 fill-yellow-400"></i>
                    <i data-lucide="star" class="w-4 h-4 text-yellow-400 fill-yellow-400"></i>
                    <i data-lucide="star" class="w-4 h-4 text-yellow-400 fill-yellow-400"></i>
                    <i data-lucide="star" class="w-4 h-4 text-yellow-400 fill-yellow-400"></i>
                    <span class="text-sm text-gray-500 ml-1">(128)</span>
                </div>
                <h3 class="font-semibold text-gray-800 mb-2">Tandir non</h3>
                <p class="text-sm text-gray-500 mb-3">Yangi pishirilgan</p>
                <div class="flex justify-between items-center">
                    <div>
                        <span class="text-2xl font-bold text-green-600">8,000</span>
                        <span class="text-sm text-gray-400"> so'm</span>
                    </div>
                    <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-colors flex items-center gap-1">
                        <i data-lucide="shopping-cart" class="w-4 h-4"></i>
                        Savatga
                    </button>
                </div>
            </div>
        </div>

        <!-- Product 4 -->
        <div class="bg-white rounded-xl shadow-md hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 overflow-hidden group">
            <div class="relative bg-gray-100">
                <img src="https://images.unsplash.com/photo-1629203851122-3726ecdf080e?w=400&h=300&fit=crop" 
                     alt="Coca Cola" 
                     class="w-full h-48 object-cover"
                     onerror="this.src='https://placehold.co/400x300/dc2626/ffffff?text=🥤+Cola'">
                <span class="absolute top-3 left-3 bg-green-500 text-white px-3 py-1 rounded-full text-xs font-semibold shadow-lg">
                    <i data-lucide="badge-check" class="w-3 h-3 inline"></i> Yangi
                </span>
                <button class="absolute top-3 right-3 w-8 h-8 bg-white rounded-full flex items-center justify-center hover:bg-red-50 hover:text-red-500 transition-colors shadow-md">
                    <i data-lucide="heart" class="w-4 h-4"></i>
                </button>
            </div>
            <div class="p-5">
                <h3 class="font-semibold text-gray-800 mb-2">Coca Cola 1.5L</h3>
                <p class="text-sm text-gray-500 mb-3">Gazli ichimlik</p>
                <div class="flex justify-between items-center">
                    <div>
                        <span class="text-2xl font-bold text-green-600">14,000</span>
                        <span class="text-sm text-gray-400"> so'm</span>
                    </div>
                    <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-colors flex items-center gap-1">
                        <i data-lucide="shopping-cart" class="w-4 h-4"></i>
                        Savatga
                    </button>
                </div>
            </div>
        </div>

        <!-- Product 5 - Banan -->
        <div class="bg-white rounded-xl shadow-md hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 overflow-hidden group">
            <div class="relative bg-gray-100">
                <img src="https://images.unsplash.com/photo-1571771894821-ce9b6c11b08e?w=400&h=300&fit=crop" 
                     alt="Banan" 
                     class="w-full h-48 object-cover"
                     onerror="this.src='https://placehold.co/400x300/fbbf24/ffffff?text=🍌+Banan'">
                <span class="absolute top-3 left-3 bg-orange-500 text-white px-3 py-1 rounded-full text-xs font-semibold shadow-lg">
                    <i data-lucide="flame" class="w-3 h-3 inline"></i> Mashhur
                </span>
                <button class="absolute top-3 right-3 w-8 h-8 bg-white rounded-full flex items-center justify-center hover:bg-red-50 hover:text-red-500 transition-colors shadow-md">
                    <i data-lucide="heart" class="w-4 h-4"></i>
                </button>
            </div>
            <div class="p-5">
                <div class="flex items-center gap-1 mb-2">
                    <i data-lucide="star" class="w-4 h-4 text-yellow-400 fill-yellow-400"></i>
                    <i data-lucide="star" class="w-4 h-4 text-yellow-400 fill-yellow-400"></i>
                    <i data-lucide="star" class="w-4 h-4 text-yellow-400 fill-yellow-400"></i>
                    <i data-lucide="star" class="w-4 h-4 text-yellow-400 fill-yellow-400"></i>
                    <i data-lucide="star" class="w-4 h-4 text-yellow-400 fill-yellow-400"></i>
                    <span class="text-sm text-gray-500 ml-1">(128)</span>
                </div>
                <h3 class="font-semibold text-gray-800 mb-2">Banan</h3>
                <p class="text-sm text-gray-500 mb-3">Import qilingan</p>
                <div class="flex justify-between items-center">
                    <div>
                        <span class="text-2xl font-bold text-green-600">22,000</span>
                        <span class="text-sm text-gray-400"> so'm</span>
                    </div>
                    <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-colors flex items-center gap-1">
                        <i data-lucide="shopping-cart" class="w-4 h-4"></i>
                        Savatga
                    </button>
                </div>
            </div>
        </div>

        <!-- Product 6 - Pishloq -->
        <div class="bg-white rounded-xl shadow-md hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 overflow-hidden group">
            <div class="relative bg-gray-100">
                <img src="https://images.unsplash.com/photo-1552767059-ce182ead6c1b?w=400&h=300&fit=crop" 
                     alt="Pishloq" 
                     class="w-full h-48 object-cover"
                     onerror="this.src='https://placehold.co/400x300/f59e0b/ffffff?text=🧀+Pishloq'">
                <span class="absolute top-3 left-3 bg-red-500 text-white px-3 py-1 rounded-full text-xs font-semibold shadow-lg">
                    <i data-lucide="percent" class="w-3 h-3 inline"></i> Chegirma
                </span>
                <button class="absolute top-3 right-3 w-8 h-8 bg-white rounded-full flex items-center justify-center hover:bg-red-50 hover:text-red-500 transition-colors shadow-md">
                    <i data-lucide="heart" class="w-4 h-4"></i>
                </button>
            </div>
            <div class="p-5">
                <div class="flex items-center gap-1 mb-2">
                    <i data-lucide="star" class="w-4 h-4 text-yellow-400 fill-yellow-400"></i>
                    <i data-lucide="star" class="w-4 h-4 text-yellow-400 fill-yellow-400"></i>
                    <i data-lucide="star" class="w-4 h-4 text-yellow-400 fill-yellow-400"></i>
                    <i data-lucide="star" class="w-4 h-4 text-yellow-400 fill-yellow-400"></i>
                    <i data-lucide="star-half" class="w-4 h-4 text-yellow-400 fill-yellow-400"></i>
                    <span class="text-sm text-gray-500 ml-1">(95)</span>
                </div>
                <h3 class="font-semibold text-gray-800 mb-2">Pishloq "Golland"</h3>
                <p class="text-sm text-gray-500 mb-3">200g, tabiiy</p>
                <div class="flex justify-between items-center">
                    <div>
                        <span class="text-2xl font-bold text-green-600">35,000</span>
                        <span class="text-sm text-gray-400"> so'm</span>
                        <span class="text-sm text-red-500 line-through ml-2">45,000</span>
                    </div>
                    <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-colors flex items-center gap-1">
                        <i data-lucide="shopping-cart" class="w-4 h-4"></i>
                        Savatga
                    </button>
                </div>
            </div>
        </div>

        <!-- Product 7 - Shokolad -->
        <div class="bg-white rounded-xl shadow-md hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 overflow-hidden group">
            <div class="relative bg-gray-100">
                <img src="https://images.unsplash.com/photo-1606312619070-d48b4c652a52?w=400&h=300&fit=crop" 
                     alt="Shokolad" 
                     class="w-full h-48 object-cover"
                     onerror="this.src='https://placehold.co/400x300/7c3aed/ffffff?text=🍫+Shokolad'">
                <span class="absolute top-3 left-3 bg-orange-500 text-white px-3 py-1 rounded-full text-xs font-semibold shadow-lg">
                    <i data-lucide="flame" class="w-3 h-3 inline"></i> Mashhur
                </span>
                <button class="absolute top-3 right-3 w-8 h-8 bg-white rounded-full flex items-center justify-center hover:bg-red-50 hover:text-red-500 transition-colors shadow-md">
                    <i data-lucide="heart" class="w-4 h-4"></i>
                </button>
            </div>
            <div class="p-5">
                <div class="flex items-center gap-1 mb-2">
                    <i data-lucide="star" class="w-4 h-4 text-yellow-400 fill-yellow-400"></i>
                    <i data-lucide="star" class="w-4 h-4 text-yellow-400 fill-yellow-400"></i>
                    <i data-lucide="star" class="w-4 h-4 text-yellow-400 fill-yellow-400"></i>
                    <i data-lucide="star" class="w-4 h-4 text-yellow-400 fill-yellow-400"></i>
                    <i data-lucide="star" class="w-4 h-4 text-yellow-400 fill-yellow-400"></i>
                    <span class="text-sm text-gray-500 ml-1">(256)</span>
                </div>
                <h3 class="font-semibold text-gray-800 mb-2">Alpen Gold shokolad</h3>
                <p class="text-sm text-gray-500 mb-3">Sutli, 90g</p>
                <div class="flex justify-between items-center">
                    <div>
                        <span class="text-2xl font-bold text-green-600">18,000</span>
                        <span class="text-sm text-gray-400"> so'm</span>
                    </div>
                    <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-colors flex items-center gap-1">
                        <i data-lucide="shopping-cart" class="w-4 h-4"></i>
                        Savatga
                    </button>
                </div>
            </div>
        </div>

        <!-- Product 8 - Qulupnay -->
        <div class="bg-white rounded-xl shadow-md hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 overflow-hidden group">
            <div class="relative bg-gray-100">
                <img src="https://images.unsplash.com/photo-1464965911861-746a04b4bca6?w=400&h=300&fit=crop" 
                     alt="Qulupnay" 
                     class="w-full h-48 object-cover"
                     onerror="this.src='https://placehold.co/400x300/ec4899/ffffff?text=🍓+Qulupnay'">
                <span class="absolute top-3 left-3 bg-green-500 text-white px-3 py-1 rounded-full text-xs font-semibold shadow-lg">
                    <i data-lucide="badge-check" class="w-3 h-3 inline"></i> Yangi
                </span>
                <button class="absolute top-3 right-3 w-8 h-8 bg-white rounded-full flex items-center justify-center hover:bg-red-50 hover:text-red-500 transition-colors shadow-md">
                    <i data-lucide="heart" class="w-4 h-4"></i>
                </button>
            </div>
            <div class="p-5">
                <div class="flex items-center gap-1 mb-2">
                    <i data-lucide="star" class="w-4 h-4 text-yellow-400 fill-yellow-400"></i>
                    <i data-lucide="star" class="w-4 h-4 text-yellow-400 fill-yellow-400"></i>
                    <i data-lucide="star" class="w-4 h-4 text-yellow-400 fill-yellow-400"></i>
                    <i data-lucide="star" class="w-4 h-4 text-yellow-400 fill-yellow-400"></i>
                    <i data-lucide="star" class="w-4 h-4 text-yellow-400"></i>
                    <span class="text-sm text-gray-500 ml-1">(67)</span>
                </div>
                <h3 class="font-semibold text-gray-800 mb-2">Qulupnay</h3>
                <p class="text-sm text-gray-500 mb-3">Yangi terilgan, 500g</p>
                <div class="flex justify-between items-center">
                    <div>
                        <span class="text-2xl font-bold text-green-600">28,000</span>
                        <span class="text-sm text-gray-400"> so'm</span>
                    </div>
                    <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-colors flex items-center gap-1">
                        <i data-lucide="shopping-cart" class="w-4 h-4"></i>
                        Savatga
                    </button>
                </div>
            </div>
        </div>

    </div>

    <!-- Pagination -->
    <div class="flex justify-center items-center gap-2 pt-8">
        <button class="w-10 h-10 rounded-lg border border-gray-300 flex items-center justify-center hover:bg-gray-50 transition-colors disabled:opacity-50 disabled:cursor-not-allowed" disabled>
            <i data-lucide="chevron-left" class="w-5 h-5 text-gray-600"></i>
        </button>
        
        <button class="w-10 h-10 rounded-lg bg-green-600 text-white font-medium">1</button>
        <button class="w-10 h-10 rounded-lg border border-gray-300 hover:bg-gray-50 transition-colors font-medium text-gray-700">2</button>
        <button class="w-10 h-10 rounded-lg border border-gray-300 hover:bg-gray-50 transition-colors font-medium text-gray-700">3</button>
        <span class="px-2 text-gray-400">...</span>
        <button class="w-10 h-10 rounded-lg border border-gray-300 hover:bg-gray-50 transition-colors font-medium text-gray-700">6</button>
        
        <button class="w-10 h-10 rounded-lg border border-gray-300 flex items-center justify-center hover:bg-gray-50 transition-colors">
            <i data-lucide="chevron-right" class="w-5 h-5 text-gray-600"></i>
        </button>
    </div>

</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        lucide.createIcons();
    });
</script>
@endsection