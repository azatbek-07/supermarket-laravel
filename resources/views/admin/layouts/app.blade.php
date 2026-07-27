<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - SuperMarket</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .active-link {
            background-color: #f0fdf4;
            color: #16a34a;
            font-weight: 600;
        }
    </style>
</head>
<body class="bg-gray-50">
    
    <!-- Top Header -->
    <header class="bg-white border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-green-600 rounded-lg flex items-center justify-center">
                    <span class="text-white text-xl">🛒</span>
                </div>
                <div>
                    <h1 class="text-xl font-bold text-gray-800">SuperMarket</h1>
                    <p class="text-xs text-gray-500">Admin Panel</p>
                </div>
            </div>
            <div class="flex items-center gap-4">
                <a href="/" class="text-sm text-gray-600 hover:text-green-600 flex items-center gap-1">
                    <span>🏠</span> Saytga qaytish
                </a>
                <form method="POST" action="/logout">
                    @csrf
                    <button class="text-sm text-red-500 hover:text-red-700 flex items-center gap-1">
                        <span>🚪</span> Chiqish
                    </button>
                </form>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-6 py-6 flex gap-6">
        
        <!-- Sidebar -->
        <aside class="w-64 flex-shrink-0">
            <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-3">
                <nav class="space-y-1">
                    <a href="/admin" 
                       class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 hover:bg-green-50 hover:text-green-600 transition
                              {{ request()->is('admin') ? 'active-link' : '' }}">
                        <span>📊</span> Dashboard
                    </a>
                    <a href="/admin/products" 
                       class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 hover:bg-green-50 hover:text-green-600 transition
                              {{ request()->is('admin/products*') ? 'active-link' : '' }}">
                        <span>📦</span> Mahsulotlar
                    </a>
                    <a href="/admin/categories" 
                       class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 hover:bg-green-50 hover:text-green-600 transition
                              {{ request()->is('admin/categories*') ? 'active-link' : '' }}">
                        <span>📑</span> Kategoriyalar
                    </a>
                    <a href="/admin/orders" 
                       class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 hover:bg-green-50 hover:text-green-600 transition
                              {{ request()->is('admin/orders*') ? 'active-link' : '' }}">
                        <span>🛍️</span> Buyurtmalar
                    </a>
                    <a href="/admin/contacts" 
                       class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 hover:bg-green-50 hover:text-green-600 transition
                              {{ request()->is('admin/contacts*') ? 'active-link' : '' }}">
                        <span>✉️</span> Xabarlar
                    </a>
                </nav>
            </div>
        </aside>

        <!-- Content Area -->
        <main class="flex-1 bg-white rounded-lg shadow-sm border border-gray-200 p-6">
            @yield('content')
        </main>
    </div>

</body>
</html>