<!DOCTYPE html>
<html lang="uz">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SuperMarket - Sifatli mahsulotlar, qulay narxlar va tezkor xizmat">
    <title>@yield('title', 'SuperMarket')</title>

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    @if (file_exists(public_path('hot')) || file_exists(public_path('build/manifest.json')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body class="bg-gradient-to-br from-gray-50 to-gray-100 flex flex-col min-h-screen">

    <!-- Header -->
    <header class="bg-gradient-to-r from-green-600 to-green-500 shadow-lg sticky top-0 z-50">
        <div class="container mx-auto flex justify-between items-center px-6 py-4">

            <!-- Logo -->
            <a href="/" class="flex items-center gap-2 group">
                <i data-lucide="shopping-cart" class="w-8 h-8 text-yellow-300 transform group-hover:scale-110 transition-transform duration-300"></i>
                <span class="text-2xl font-bold text-white tracking-tight">
                    Super<span class="text-yellow-300">Market</span>
                </span>
            </a>

            <!-- Mobile Menu Button -->
            <button class="lg:hidden text-white focus:outline-none hover:text-yellow-300 transition-colors duration-300" id="mobile-menu-button">
                <i data-lucide="menu" class="w-6 h-6" id="menu-icon"></i>
            </button>

            <!-- Menu -->
            <nav class="hidden lg:block" id="mobile-menu">
                <ul class="flex flex-col lg:flex-row items-center gap-2 lg:gap-8 text-white font-medium">
                    <li>
                        <a href="{{route('home')  }}" class="relative px-3 py-2 hover:text-yellow-300 transition-colors duration-300 group flex items-center gap-1.5">
                            <i data-lucide="home" class="w-4 h-4"></i>
                            Bosh sahifa
                            <span class="absolute bottom-0 left-0 w-full h-0.5 bg-yellow-300 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('products.index') }}" class="relative px-3 py-2 hover:text-yellow-300 transition-colors duration-300 group flex items-center gap-1.5">
                            <i data-lucide="package" class="w-4 h-4"></i>
                            Mahsulotlar
                            <span class="absolute bottom-0 left-0 w-full h-0.5 bg-yellow-300 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
                        </a>  
                    </li>
                    <li>
                        <a href="/contact" class="relative px-3 py-2 hover:text-yellow-300 transition-colors duration-300 group flex items-center gap-1.5">
                            <i data-lucide="phone" class="w-4 h-4"></i>
                            Aloqa
                            <span class="absolute bottom-0 left-0 w-full h-0.5 bg-yellow-300 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- Right Side -->
            <div class="hidden lg:flex items-center gap-3">
                <a href="/cart" class="relative bg-white/20 backdrop-blur-sm text-white px-4 py-2.5 rounded-xl hover:bg-white hover:text-green-600 transition-all duration-300 font-medium group">
                    <span class="flex items-center gap-2">
                        <i data-lucide="shopping-bag" class="w-5 h-5"></i>
                        Savat
                        <span class="bg-red-500 text-white text-xs px-2 py-0.5 rounded-full group-hover:bg-green-600 transition-colors duration-300">0</span>
                    </span>
                </a>

                <a href="/login" class="text-white hover:text-yellow-300 transition-colors duration-300 font-medium flex items-center gap-1.5">
                    <i data-lucide="log-in" class="w-4 h-4"></i>
                    Kirish
                </a>

                <a href="/register" class="bg-yellow-400 text-gray-900 px-6 py-2.5 rounded-xl hover:bg-yellow-300 hover:shadow-lg transform hover:-translate-y-0.5 transition-all duration-300 font-semibold flex items-center gap-1.5">
                    <i data-lucide="user-plus" class="w-4 h-4"></i>
                    Ro'yxatdan o'tish
                </a>
            </div>
        </div>
    </header>

    <!-- Main -->
    <main class="flex-1 container mx-auto py-10 px-6">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gradient-to-br from-gray-900 to-gray-800 text-gray-300 mt-auto">

        <div class="container mx-auto px-6 py-12 grid md:grid-cols-3 gap-12">

            <!-- About -->
            <div class="space-y-4">
                <h2 class="text-3xl font-bold text-white flex items-center gap-2">
                    <i data-lucide="shopping-cart" class="w-8 h-8 text-green-400"></i>
                    Super<span class="text-green-400">Market</span>
                </h2>
                <p class="text-gray-400 leading-relaxed">
                    Sifatli mahsulotlar, qulay narxlar va tezkor xizmat. Biz bilan xarid qilish yanada yoqimli!
                </p>
                <div class="flex gap-3 pt-2">
                    <!-- Facebook -->
                    <a href="#" class="w-10 h-10 bg-gray-700 rounded-lg flex items-center justify-center hover:bg-blue-600 transition-colors duration-300" title="Facebook">
                        <i data-lucide="facebook" class="w-5 h-5 text-white"></i>
                    </a>
                    <!-- Telegram -->
                    <a href="#" class="w-10 h-10 bg-gray-700 rounded-lg flex items-center justify-center hover:bg-blue-500 transition-colors duration-300" title="Telegram">
                        <i data-lucide="send" class="w-5 h-5 text-white"></i>
                    </a>
                    <!-- Instagram -->
                    <a href="#" class="w-10 h-10 bg-gray-700 rounded-lg flex items-center justify-center hover:bg-pink-600 transition-colors duration-300" title="Instagram">
                        <i data-lucide="instagram" class="w-5 h-5 text-white"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-xl font-semibold text-white mb-6 relative inline-block">
                    Tezkor havolalar
                    <span class="absolute -bottom-2 left-0 w-1/2 h-0.5 bg-green-500"></span>
                </h3>
                <ul class="space-y-3 mt-4">
                    <li>
                        <a href="/" class="flex items-center gap-2 hover:text-green-400 transition-colors duration-300 group">
                            <i data-lucide="chevron-right" class="w-4 h-4 opacity-0 group-hover:opacity-100 transform -translate-x-2 group-hover:translate-x-0 transition-all duration-300"></i>
                            <i data-lucide="home" class="w-4 h-4"></i>
                            Bosh sahifa
                        </a>
                    </li>
                    <li>
                        <a href="/products" class="flex items-center gap-2 hover:text-green-400 transition-colors duration-300 group">
                            <i data-lucide="chevron-right" class="w-4 h-4 opacity-0 group-hover:opacity-100 transform -translate-x-2 group-hover:translate-x-0 transition-all duration-300"></i>
                            <i data-lucide="package" class="w-4 h-4"></i>
                            Mahsulotlar
                        </a>
                    </li>
                    <li>
                        <a href="/contact" class="flex items-center gap-2 hover:text-green-400 transition-colors duration-300 group">
                            <i data-lucide="chevron-right" class="w-4 h-4 opacity-0 group-hover:opacity-100 transform -translate-x-2 group-hover:translate-x-0 transition-all duration-300"></i>
                            <i data-lucide="phone" class="w-4 h-4"></i>
                            Aloqa
                        </a>
                    </li>
                    <li>
                        <a href="/about" class="flex items-center gap-2 hover:text-green-400 transition-colors duration-300 group">
                            <i data-lucide="chevron-right" class="w-4 h-4 opacity-0 group-hover:opacity-100 transform -translate-x-2 group-hover:translate-x-0 transition-all duration-300"></i>
                            <i data-lucide="info" class="w-4 h-4"></i>
                            Biz haqimizda
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Contact -->
            <div>
                <h3 class="text-xl font-semibold text-white mb-6 relative inline-block">
                    Bog'lanish
                    <span class="absolute -bottom-2 left-0 w-1/2 h-0.5 bg-green-500"></span>
                </h3>
                <ul class="space-y-4 mt-4">
                    <li class="flex items-start gap-3">
                        <i data-lucide="map-pin" class="w-5 h-5 text-green-400 mt-1 flex-shrink-0"></i>
                        <span>Samarqand shahri,<br>O'zbekiston</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <i data-lucide="phone" class="w-5 h-5 text-green-400 flex-shrink-0"></i>
                        <a href="tel:+998901234567" class="hover:text-green-400 transition-colors duration-300">+998 90 123 45 67</a>
                    </li>
                    <li class="flex items-center gap-3">
                        <i data-lucide="mail" class="w-5 h-5 text-green-400 flex-shrink-0"></i>
                        <a href="mailto:supermarket@gmail.com" class="hover:text-green-400 transition-colors duration-300">supermarket@gmail.com</a>
                    </li>
                    <li class="flex items-start gap-3">
                        <i data-lucide="clock" class="w-5 h-5 text-green-400 mt-1 flex-shrink-0"></i>
                        <span>Dushanba - Yakshanba<br>08:00 - 22:00</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="border-t border-gray-700">
            <div class="container mx-auto px-6 py-4 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-gray-400 text-sm flex items-center gap-1.5">
                    <i data-lucide="copyright" class="w-4 h-4"></i>
                    {{ date('Y') }} SuperMarket. Barcha huquqlar himoyalangan.
                </p>
                <div class="flex gap-4 text-sm text-gray-400">
                    <a href="#" class="hover:text-green-400 transition-colors duration-300 flex items-center gap-1">
                        <i data-lucide="shield" class="w-3.5 h-3.5"></i>
                        Maxfiylik siyosati
                    </a>
                    <a href="#" class="hover:text-green-400 transition-colors duration-300 flex items-center gap-1">
                        <i data-lucide="file-text" class="w-3.5 h-3.5"></i>
                        Foydalanish shartlari
                    </a>
                </div>
            </div>
        </div>

    </footer>

    <!-- Mobile Menu Script -->
    <script>
        // Mobile menu toggle
        const menuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');
        
        if (menuButton && mobileMenu) {
            menuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
                
                // Change icon between menu and X
                if (mobileMenu.classList.contains('hidden')) {
                    menuIcon.setAttribute('data-lucide', 'menu');
                } else {
                    menuIcon.setAttribute('data-lucide', 'x');
                }
                
                // Re-render Lucide icons
                lucide.createIcons();
            });
        }

        // Initialize Lucide icons
        document.addEventListener('DOMContentLoaded', function() {
            lucide.createIcons();
        });
    </script>

</body>

</html>