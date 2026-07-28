@extends('admin.layouts.app')

@section('title', 'Mahsulotlar - Admin Panel')

@section('content')
    <div class="space-y-6">

        <!-- Header -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
            <div>
                <h1 class="text-2xl font-bold text-gray-800">📦 Mahsulotlar</h1>
                <p class="text-gray-500 mt-1">Jami: <strong>{{ count($products) }} mahsulot</p>
            </div>
            <a href="{{ route('admin.products.create') }}"
                class="bg-green-600 text-white px-5 py-2.5 rounded-lg hover:bg-green-700 transition flex items-center gap-2">
                <span class="text-xl">+</span> Yangi mahsulot
            </a>
        </div>

        <!-- Qidiruv -->
        <div class="bg-white rounded-lg p-4 shadow-sm">
            <div class="flex flex-col md:flex-row gap-4">
                <div class="flex-1 relative">
                    <span class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400">🔍</span>
                    <input type="text" placeholder="Mahsulot qidirish..."
                        class="w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-lg focus:border-green-500 focus:ring-2 focus:ring-green-200 outline-none">
                </div>
                <select class="border border-gray-300 rounded-lg px-4 py-2.5 focus:border-green-500 outline-none">
                    <option value="">Barcha kategoriyalar</option>
                    <option value="meva">Meva va sabzavotlar</option>
                    <option value="sut">Sut mahsulotlari</option>
                    <option value="non">Non mahsulotlari</option>
                </select>
            </div>
        </div>

        <!-- Jadval -->
        <div class="bg-white rounded-lg shadow-sm overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="bg-gray-50 border-b">
                            <th class="px-6 py-4 text-left text-sm font-semibold text-gray-600">ID</th>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-gray-600">Rasm</th>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-gray-600">Nomi</th>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-gray-600">Kategoriya</th>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-gray-600">Narxi</th>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-gray-600">Holat</th>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-gray-600">Harakatlar</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @foreach($products as $product)
                            <tr class="hover:bg-gray-50 transition">
                                <!-- ID -->
                                <td class="px-6 py-4 text-sm text-gray-600">#{{ $product['id'] }}</td>

                                <!-- Rasm -->
                                <td class="px-6 py-4">
                                    <img src="{{ Str::startsWith($product->image, 'http') ? $product->image : asset('storage/' . $product->image) }}"
                                        class="w-14 h-14 object-cover rounded-lg border">
                                </td>

                                <!-- Nomi -->
                                <td class="px-6 py-4">
                                    <p class="font-medium text-gray-800">{{ $product['name'] }}</p>
                                    <p class="text-sm text-gray-500">{{ Str::limit($product['description'], 30) }}</p>
                                </td>

                                <!-- Kategoriya -->
                                <td class="px-6 py-4">
                                    <span class="inline-block px-3 py-1 bg-blue-50 text-blue-700 rounded-full text-sm">
                                        {{ $product['category'] ?? 'Umumiy' }}
                                    </span>
                                </td>

                                <!-- Narxi -->
                                <td class="px-6 py-4">
                                    <span class="font-semibold text-gray-800">
                                        {{ number_format($product['price'], 0, ',', ' ') }} so'm
                                    </span>
                                </td>

                                <!-- Holat -->
                                <td class="px-6 py-4">
                                    @if($product['badge'] == 'Yangi')
                                        <span class="inline-block px-3 py-1 bg-green-50 text-green-700 rounded-full text-sm">
                                            🟢 Yangi
                                        </span>
                                    @elseif($product['badge'] == 'Chegirma')
                                        <span class="inline-block px-3 py-1 bg-red-50 text-red-700 rounded-full text-sm">
                                            🔴 Chegirma
                                        </span>
                                    @else
                                        <span class="inline-block px-3 py-1 bg-orange-50 text-orange-700 rounded-full text-sm">
                                            🟠 {{ $product['badge'] }}
                                        </span>
                                    @endif
                                </td>

                                <!-- Harakatlar -->
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-2">
                                        <!-- Tahrirlash -->
                                        <a href="{{ route('admin.products.edit', $product->id) }}"
                                            class="p-2 text-blue-600 hover:bg-blue-50 rounded-lg transition inline-block"
                                            title="Tahrirlash">
                                            ✏️
                                        </a>

                                        <!-- O'chirish -->
                                        <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST"
                                            class="inline-block" onsubmit="return confirm('Rostdan ham o\'chirmoqchimisiz?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="p-2 text-red-600 hover:bg-red-50 rounded-lg transition"
                                                title="O'chirish">
                                                🗑️
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Jadval pastki qismi -->
            <div class="px-6 py-4 border-t bg-gray-50 flex justify-between items-center">
                <p class="text-sm text-gray-600">
                    Jami: <strong>{{ count($products) }} ta</strong> mahsulot
                </p>
            </div>
        </div>

    </div>

    <!-- Yangi Mahsulot Modal -->
    <div id="addModal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-xl w-full max-w-lg">
            <div class="flex justify-between items-center p-6 border-b">
                <h3 class="text-xl font-bold text-gray-800">➕ Yangi mahsulot qo'shish</h3>
                <button onclick="closeAddModal()" class="text-gray-400 hover:text-gray-600 text-2xl">✕</button>
            </div>

            <form class="p-6 space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Mahsulot nomi *</label>
                    <input type="text"
                        class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:border-green-500 focus:ring-2 focus:ring-green-200 outline-none"
                        placeholder="Masalan: Olma">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Kategoriya *</label>
                    <select
                        class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:border-green-500 outline-none">
                        <option value="">Kategoriyani tanlang</option>
                        <option value="meva">Meva va sabzavotlar</option>
                        <option value="sut">Sut mahsulotlari</option>
                        <option value="non">Non mahsulotlari</option>
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Narxi *</label>
                    <input type="number"
                        class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:border-green-500 focus:ring-2 focus:ring-green-200 outline-none"
                        placeholder="Narx kiriting">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Tavsif</label>
                    <textarea rows="3"
                        class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:border-green-500 focus:ring-2 focus:ring-green-200 outline-none"
                        placeholder="Mahsulot haqida qisqacha..."></textarea>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Rasm</label>
                    <input type="file" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg">
                </div>

                <div class="flex gap-3 pt-4">
                    <button type="button" onclick="closeAddModal()"
                        class="flex-1 px-4 py-2.5 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition">
                        Bekor qilish
                    </button>
                    <button type="submit"
                        class="flex-1 px-4 py-2.5 bg-green-600 text-white rounded-lg hover:bg-green-700 transition">
                        Saqlash
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- O'chirish Tasdiqlash Modal -->
    <div id="deleteModal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-xl w-full max-w-md p-6 text-center">
            <div class="text-5xl mb-4">⚠️</div>
            <h3 class="text-xl font-bold text-gray-800 mb-2">Rostdan ham o'chirmoqchimisiz?</h3>
            <p class="text-gray-600 mb-6">Bu mahsulot butunlay o'chiriladi va qayta tiklab bo'lmaydi</p>

            <div class="flex gap-3">
                <button onclick="closeDeleteModal()"
                    class="flex-1 px-4 py-2.5 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition">
                    Yo'q, bekor qilish
                </button>
                <button onclick="deleteProduct()"
                    class="flex-1 px-4 py-2.5 bg-red-600 text-white rounded-lg hover:bg-red-700 transition">
                    Ha, o'chirish
                </button>
            </div>
        </div>
    </div>


@endsection