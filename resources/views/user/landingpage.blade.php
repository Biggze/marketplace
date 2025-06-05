@extends('layout.app')

@section('content')
<!-- Hero Section -->
<section class="bg-white py-16">
    <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">
        <div class="md:w-1/2 mb-8 md:mb-0">
            <h1 class="text-4xl md:text-5xl font-bold mb-4 text-gray-800">Temukan Sepatu Impianmu di <span class="text-green-500">ShoeMarket</span></h1>
            <p class="text-lg text-gray-600 mb-6">Marketplace sepatu online dengan koleksi terlengkap, harga terbaik, dan kualitas terjamin. Belanja sepatu jadi lebih mudah dan menyenangkan!</p>
            <a href="/products" class="bg-green-500 text-white px-6 py-3 rounded font-semibold hover:bg-green-600 transition duration-300">Jelajahi Produk</a>
        </div>
        <div class="md:w-1/2 flex justify-center">
            <!-- Ganti gambar dengan icon sepatu -->
            <div class="bg-green-100 rounded-full p-8 shadow-lg flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-32 w-32 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2M4 16V8a2 2 0 012-2h12a2 2 0 012 2v8M4 16h16" />
                </svg>
            </div>
        </div>
    </div>
</section>

<!-- Kategori Sepatu -->
<section class="py-12 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl font-bold text-gray-800 mb-8 text-center">Kategori Populer</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Sneakers -->
            <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition flex flex-col items-center">
                <div class="bg-green-100 rounded-full p-6 mb-4">
                    <!-- Sneakers Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2M4 16V8a2 2 0 012-2h12a2 2 0 012 2v8M4 16h16" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Sneakers</h3>
                <p class="text-gray-600 text-center">Pilihan sneakers terbaru dan terpopuler untuk gaya kasualmu.</p>
            </div>
            <!-- Running -->
            <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition flex flex-col items-center">
                <div class="bg-blue-100 rounded-full p-6 mb-4">
                    <!-- Running Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V8a1 1 0 00-1-1H7m6 9a1 1 0 001 1h4a1 1 0 001-1v-4a1 1 0 00-1-1h-4a1 1 0 00-1 1v4z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Running</h3>
                <p class="text-gray-600 text-center">Sepatu lari berkualitas untuk performa terbaik di setiap langkah.</p>
            </div>
            <!-- Formal -->
            <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition flex flex-col items-center">
                <div class="bg-yellow-100 rounded-full p-6 mb-4">
                    <!-- Formal Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0-1.104.896-2 2-2s2 .896 2 2-.896 2-2 2-2-.896-2-2zm-6 8v-2a4 4 0 014-4h4a4 4 0 014 4v2" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Formal</h3>
                <p class="text-gray-600 text-center">Tampil elegan dengan koleksi sepatu formal pilihan.</p>
            </div>
        </div>
    </div>
</section>

<!-- Promo Section -->
<section class="py-12 bg-green-500">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-2xl font-bold text-white mb-4">Promo Spesial Bulan Ini!</h2>
        <p class="text-white mb-6">Dapatkan diskon hingga <span class="font-bold">50%</span> untuk produk pilihan. Jangan lewatkan kesempatan ini!</p>
        <a href="/products" class="bg-white text-green-500 px-6 py-3 rounded font-semibold hover:bg-gray-100 transition duration-300">Lihat Promo</a>
    </div>
</section>

<!-- Testimoni -->
<section class="py-12 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl font-bold text-gray-800 mb-8 text-center">Apa Kata Mereka?</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow flex flex-col items-center">
                <!-- Ganti foto user dengan icon user -->
                <div class="bg-gray-200 rounded-full p-3 mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A9 9 0 1112 21a9 9 0 01-6.879-3.196z" />
                    </svg>
                </div>
                <p class="text-gray-600 mb-4 text-center">"Belanja di ShoeMarket sangat mudah, koleksi sepatunya lengkap dan pengirimannya cepat!"</p>
                <span class="font-semibold text-gray-800">Andi</span>
            </div>
            <div class="bg-white p-6 rounded-lg shadow flex flex-col items-center">
                <div class="bg-gray-200 rounded-full p-3 mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A9 9 0 1112 21a9 9 0 01-6.879-3.196z" />
                    </svg>
                </div>
                <p class="text-gray-600 mb-4 text-center">"Harga bersaing dan kualitas sepatu sangat bagus. Pasti belanja lagi!"</p>
                <span class="font-semibold text-gray-800">Siti</span>
            </div>
            <div class="bg-white p-6 rounded-lg shadow flex flex-col items-center">
                <div class="bg-gray-200 rounded-full p-3 mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A9 9 0 1112 21a9 9 0 01-6.879-3.196z" />
                    </svg>
                </div>
                <p class="text-gray-600 mb-4 text-center">"Customer service ramah dan responsif. Sangat puas dengan pelayanannya."</p>
                <span class="font-semibold text-gray-800">Budi</span>
            </div>
        </div>
    </div>
</section>
@endsection