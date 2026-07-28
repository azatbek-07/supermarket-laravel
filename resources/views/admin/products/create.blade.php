@extends('admin.layouts.app')

@section('content')
<div class="space-y-6">
    
    <!-- Header -->
    <div class="flex items-center gap-4">
        <a href="/admin/products" class="text-gray-500 hover:text-gray-700 text-lg">
            ← Orqaga
        </a>
        <div>
            <h2 class="text-2xl font-bold text-gray-800">➕ Yangi mahsulot qo'shish</h2>
            <p class="text-gray-500 text-sm mt-1">Mahsulot ma'lumotlarini to'ldiring</p>
        </div>
    </div>

    <!-- Form -->
    <div class="bg-white border border-gray-200 rounded-lg p-6">
        <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Nomi -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Mahsulot nomi <span class="text-red-500">*</span>
                    </label>
                    <input type="text" 
                           name="name" 
                           value="{{ old('name') }}" 
                           class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:border-green-500 focus:ring-2 focus:ring-green-200 outline-none"
                           placeholder="Masalan: Qizil olma"
                           required>
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Kategoriya -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Kategoriya <span class="text-red-500">*</span>
                    </label>
                    <select name="category" 
                            class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:border-green-500 focus:ring-2 focus:ring-green-200 outline-none"
                            required>
                        <option value="">Kategoriyani tanlang</option>
                        <option value="meva" {{ old('category') == 'meva' ? 'selected' : '' }}>Meva va sabzavotlar</option>
                        <option value="sut" {{ old('category') == 'sut' ? 'selected' : '' }}>Sut mahsulotlari</option>
                        <option value="non" {{ old('category') == 'non' ? 'selected' : '' }}>Non mahsulotlari</option>
                        <option value="gosht" {{ old('category') == 'gosht' ? 'selected' : '' }}>Go'sht mahsulotlari</option>
                        <option value="ichimlik" {{ old('category') == 'ichimlik' ? 'selected' : '' }}>Ichimliklar</option>
                        <option value="shirinlik" {{ old('category') == 'shirinlik' ? 'selected' : '' }}>Shirinliklar</option>
                        <option value="boshqa" {{ old('category') == 'boshqa' ? 'selected' : '' }}>Boshqa</option>
                    </select>
                    @error('category')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Narxi -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Narxi (so'm) <span class="text-red-500">*</span>
                    </label>
                    <input type="number" 
                           name="price" 
                           value="{{ old('price') }}" 
                           class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:border-green-500 focus:ring-2 focus:ring-green-200 outline-none"
                           placeholder="Masalan: 15000"
                           required>
                    @error('price')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Soni -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Soni (kg/dona)
                    </label>
                    <input type="number" 
                           name="quantity" 
                           value="{{ old('quantity') }}" 
                           class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:border-green-500 focus:ring-2 focus:ring-green-200 outline-none"
                           placeholder="Masalan: 50">
                    @error('quantity')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Holati -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Holati
                    </label>
                    <select name="badge" 
                            class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:border-green-500 focus:ring-2 focus:ring-green-200 outline-none">
                        <option value="Yangi" {{ old('badge') == 'Yangi' ? 'selected' : '' }}>🟢 Yangi</option>
                        <option value="Chegirma" {{ old('badge') == 'Chegirma' ? 'selected' : '' }}>🔴 Chegirma</option>
                        <option value="Mashhur" {{ old('badge') == 'Mashhur' ? 'selected' : '' }}>🟠 Mashhur</option>
                        <option value="Oddiy" {{ old('badge') == 'Oddiy' ? 'selected' : '' }}>⚪ Oddiy</option>
                    </select>
                </div>

                <!-- Chegirma narxi -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Chegirma narxi (agar bo'lsa)
                    </label>
                    <input type="number" 
                           name="old_price" 
                           value="{{ old('discount_price') }}" 
                           class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:border-green-500 focus:ring-2 focus:ring-green-200 outline-none"
                           placeholder="Chegirmadagi narx">
                </div>
            </div>

            <!-- Tavsif -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Tavsif
                </label>
                <textarea name="description" 
                          rows="4" 
                          class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:border-green-500 focus:ring-2 focus:ring-green-200 outline-none"
                          placeholder="Mahsulot haqida batafsil ma'lumot yozing...">{{ old('description') }}</textarea>
                @error('description')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Rasm yuklash -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Mahsulot rasmi
                </label>
                <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center hover:border-green-500 transition">
                    <input type="file" 
                           name="image" 
                           id="image"
                           accept="image/*"
                           class="">
                    <label for="image" class="cursor-pointer">
                        <div class="text-4xl mb-2">📸</div>
                        <p class="text-gray-600 font-medium">Rasm yuklash uchun bosing</p>
                        <p class="text-gray-400 text-sm mt-1">JPG, PNG yoki WebP formatida</p>
                    </label>
                </div>
                <!-- Rasm preview -->
                <div id="imagePreview" class="mt-3 hidden">
                    <p class="text-sm text-gray-600 mb-2">Yuklangan rasm:</p>
                    <img id="preview" src="" alt="Preview" class="w-40 h-40 object-cover rounded-lg border">
                </div>
                @error('image')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Tugmalar -->
            <div class="flex gap-4 pt-4 border-t border-gray-200">
                <button type="submit" 
                        class="px-6 py-2.5 bg-green-600 text-white rounded-lg hover:bg-green-700 transition flex items-center gap-2">
                    💾 Saqlash
                </button>
                <a href="/admin/products" 
                   class="px-6 py-2.5 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition flex items-center gap-2">
                    ❌ Bekor qilish
                </a>
            </div>
        </form>
    </div>
</div>


@endsection