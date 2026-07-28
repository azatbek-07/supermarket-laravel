@extends('admin.layouts.app')

@section('content')

<div class="space-y-6">

<!-- Header -->
<div class="flex items-center gap-4">
    <a href="{{ route('admin.products.index') }}"
       class="text-gray-500 hover:text-gray-700">
        ← Orqaga
    </a>

    <div>
        <h2 class="text-2xl font-bold text-gray-800">
            ✏️ Mahsulotni tahrirlash
        </h2>

        <p class="text-gray-500 text-sm mt-1">
            #{{ $product->id }} - {{ $product->name }}
        </p>
    </div>
</div>


<!-- Form -->
<div class="bg-white border border-gray-200 rounded-lg p-6">

    <form action="{{ route('admin.products.edit', $product->id) }}"
          method="POST"
          enctype="multipart/form-data"
          class="space-y-6">

        @csrf
        @method('PUT')


        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <!-- Nomi -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Mahsulot nomi
                    <span class="text-red-500">*</span>
                </label>

                <input type="text"
                       name="name"
                       value="{{ old('name', $product->name) }}"
                       class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:border-green-500 focus:ring-2 focus:ring-green-200 outline-none"
                       required>

                @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>


            <!-- Kategoriya -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Kategoriya
                    <span class="text-red-500">*</span>
                </label>

                <select name="category"
                        class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:border-green-500 focus:ring-2 focus:ring-green-200 outline-none"
                        required>

                    <option value="">Kategoriyani tanlang</option>

                    <option value="meva"
                        {{ old('category', $product->category) == 'meva' ? 'selected' : '' }}>
                        Meva va sabzavotlar
                    </option>

                    <option value="sut"
                        {{ old('category', $product->category) == 'sut' ? 'selected' : '' }}>
                        Sut mahsulotlari
                    </option>

                    <option value="non"
                        {{ old('category', $product->category) == 'non' ? 'selected' : '' }}>
                        Non mahsulotlari
                    </option>

                    <option value="gosht"
                        {{ old('category', $product->category) == 'gosht' ? 'selected' : '' }}>
                        Go'sht mahsulotlari
                    </option>

                    <option value="ichimlik"
                        {{ old('category', $product->category) == 'ichimlik' ? 'selected' : '' }}>
                        Ichimliklar
                    </option>

                    <option value="shirinlik"
                        {{ old('category', $product->category) == 'shirinlik' ? 'selected' : '' }}>
                        Shirinliklar
                    </option>

                </select>

                @error('category')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>


            <!-- Narxi -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Narxi (so'm)
                    <span class="text-red-500">*</span>
                </label>

                <input type="number"
                       name="price"
                       value="{{ old('price', $product->price) }}"
                       class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:border-green-500 focus:ring-2 focus:ring-green-200 outline-none"
                       required>

                @error('price')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>


            <!-- Soni -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Soni (kg/dona)
                </label>

                <input type="number"
                       name="quantity"
                       value="{{ old('quantity', $product->quantity) }}"
                       class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:border-green-500 focus:ring-2 focus:ring-green-200 outline-none">

                @error('quantity')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>


            <!-- Holati -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Holati
                </label>

                <select name="badge"
                        class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:border-green-500 focus:ring-2 focus:ring-green-200 outline-none">

                    <option value="Yangi"
                        {{ old('badge', $product->badge) == 'Yangi' ? 'selected' : '' }}>
                        🟢 Yangi
                    </option>

                    <option value="Chegirma"
                        {{ old('badge', $product->badge) == 'Chegirma' ? 'selected' : '' }}>
                        🔴 Chegirma
                    </option>

                    <option value="Mashhur"
                        {{ old('badge', $product->badge) == 'Mashhur' ? 'selected' : '' }}>
                        🟠 Mashhur
                    </option>

                    <option value="Oddiy"
                        {{ old('badge', $product->badge) == 'Oddiy' ? 'selected' : '' }}>
                        ⚪ Oddiy
                    </option>

                </select>

                @error('badge')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>


            <!-- Eski narx -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Eski narx
                </label>

                <input type="number"
                       name="old_price"
                       value="{{ old('old_price', $product->old_price) }}"
                       placeholder="Eski narx"
                       class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:border-green-500 focus:ring-2 focus:ring-green-200 outline-none">

                @error('old_price')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
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
                      placeholder="Mahsulot haqida batafsil ma'lumot...">{{ old('description', $product->description) }}</textarea>

            @error('description')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror

        </div>


        <!-- Hozirgi rasm -->
        <div>

            <label class="block text-sm font-medium text-gray-700 mb-3">
                Hozirgi rasm
            </label>

            @if($product->image)

                <img src="{{ Str::startsWith($product->image, 'http')
                    ? $product->image
                    : asset('storage/' . $product->image) }}"
                     alt="{{ $product->name }}"
                     class="w-32 h-32 object-cover rounded-lg border border-gray-200">

            @else

                <div class="w-32 h-32 bg-gray-100 rounded-lg flex items-center justify-center text-gray-400">
                    Rasm yo'q
                </div>

            @endif

        </div>


        <!-- Yangi rasm -->
        <div>

            <label class="block text-sm font-medium text-gray-700 mb-2">
                Yangi rasm yuklash
            </label>

            <input type="file"
                   name="image"
                   accept="image/*"
                   class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:border-green-500 focus:ring-2 focus:ring-green-200 outline-none">

            <p class="text-xs text-gray-500 mt-1">
                Bo'sh qoldirilsa, joriy rasm saqlanib qoladi
            </p>

            @error('image')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror

        </div>


        <!-- Tugmalar -->
        <div class="flex gap-4 pt-4 border-t border-gray-200">

            <button type="submit"
                    class="px-6 py-2.5 bg-green-600 text-white rounded-lg hover:bg-green-700 transition flex items-center gap-2">
                💾 Saqlash
            </button>

            <a href="{{ route('admin.products.index') }}"
               class="px-6 py-2.5 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition flex items-center gap-2">
                ❌ Bekor qilish
            </a>

        </div>

    </form>

</div>

</div> @endsection