<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShoeMarket - Marketplace Sepatu Online</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="font-sans bg-gray-50">
    <!-- Navbar -->
    <nav class="bg-white shadow-lg">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between">
                <div class="flex space-x-7">
                    <!-- Logo -->
                    <div>
                        <a href="/" class="flex items-center py-4 px-2">
                            <!-- Ganti img dengan icon SVG sepatu -->
                            <span class="bg-green-100 rounded-full p-1 mr-2 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2M4 16V8a2 2 0 012-2h12a2 2 0 012 2v8M4 16h16" />
                                </svg>
                            </span>
                            <span class="font-semibold text-gray-500 text-lg">ShoeMarket</span>
                        </a>
                    </div>
                    <!-- Menu Items -->
                    <div class="hidden md:flex items-center space-x-1">
                        <a href="/" class="py-4 px-2 text-green-500 border-b-4 border-green-500 font-semibold">Home</a>
                        <a href="/products" class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Produk</a>
                        <a href="/about" class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Tentang Kami</a>
                        <a href="/contact" class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Kontak</a>
                    </div>
                </div>
                <!-- Auth Links -->
                <div class="hidden md:flex items-center space-x-3">
                    <a href="/login" class="py-2 px-2 font-medium text-gray-500 rounded hover:bg-green-500 hover:text-white transition duration-300">Masuk</a>
                    <a href="/register" class="py-2 px-2 font-medium text-white bg-green-500 rounded hover:bg-green-400 transition duration-300">Daftar</a>
                </div>
                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button class="outline-none mobile-menu-button">
                        <svg class="w-6 h-6 text-gray-500" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div class="hidden mobile-menu">
            <ul>
                <li><a href="/" class="block text-sm px-2 py-4 text-white bg-green-500 font-semibold">Home</a></li>
                <li><a href="/products" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Produk</a></li>
                <li><a href="/about" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Tentang Kami</a></li>
                <li><a href="/contact" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Kontak</a></li>
                <li class="border-t-2 border-gray-200">
                    <a href="/login" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Masuk</a>
                    <a href="/register" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Daftar</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white pt-12 pb-8">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap">
                <!-- About Section -->
                <div class="w-full md:w-1/3 lg:w-1/4 mb-8">
                    <h3 class="text-xl font-semibold mb-4">Tentang ShoeMarket</h3>
                    <p class="text-gray-400">Marketplace sepatu terbaik dengan koleksi terlengkap dan harga terbaik. Temukan sepatu impianmu di sini.</p>
                </div>
                
                <!-- Quick Links -->
                <div class="w-full md:w-1/3 lg:w-1/4 mb-8">
                    <h3 class="text-xl font-semibold mb-4">Tautan Cepat</h3>
                    <ul>
                        <li class="mb-2"><a href="/products" class="text-gray-400 hover:text-white">Produk</a></li>
                        <li class="mb-2"><a href="/about" class="text-gray-400 hover:text-white">Tentang Kami</a></li>
                        <li class="mb-2"><a href="/contact" class="text-gray-400 hover:text-white">Kontak</a></li>
                        <li class="mb-2"><a href="/faq" class="text-gray-400 hover:text-white">FAQ</a></li>
                    </ul>
                </div>
                
                <!-- Contact Info -->
                <div class="w-full md:w-1/3 lg:w-1/4 mb-8">
                    <h3 class="text-xl font-semibold mb-4">Hubungi Kami</h3>
                    <ul>
                        <li class="mb-2 flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            <span class="text-gray-400">+62 123 4567 890</span>
                        </li>
                        <li class="mb-2 flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <span class="text-gray-400">info@shoemarket.com</span>
                        </li>
                        <li class="mb-2 flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span class="text-gray-400">Jakarta, Indonesia</span>
                        </li>
                    </ul>
                </div>
                
                <!-- Newsletter -->
                <div class="w-full md:w-1/3 lg:w-1/4 mb-8">
                    <h3 class="text-xl font-semibold mb-4">Newsletter</h3>
                    <p class="text-gray-400 mb-4">Dapatkan promo dan penawaran terbaik dari kami.</p>
                    <form class="flex">
                        <input type="email" placeholder="Email Anda" class="px-4 py-2 w-full rounded-l focus:outline-none text-gray-800">
                        <button type="submit" class="bg-green-500 hover:bg-green-600 px-4 py-2 rounded-r focus:outline-none">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
            
            <!-- Copyright -->
            <div class="border-t border-gray-700 pt-6 mt-6 text-center text-gray-400">
                <p>&copy; 2023 ShoeMarket. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        // Mobile menu toggle
        const btn = document.querySelector(".mobile-menu-button");
        const menu = document.querySelector(".mobile-menu");

        btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });
    </script>
</body>
</html>