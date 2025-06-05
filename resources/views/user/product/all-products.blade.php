@extends('layout.app')
@section('content')
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold mb-8 text-center text-gray-800">Semua Produk Sepatu</h1>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($products as $product)
            <div class="bg-gray-50 rounded-lg shadow p-6 flex flex-col items-center">
                <div class="rounded-full p-6 mb-4
                    @if($product['color'] == 'green') bg-green-100 @elseif($product['color'] == 'blue') bg-blue-100 @else bg-yellow-100 @endif">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12
                        @if($product['color'] == 'green') text-green-500 @elseif($product['color'] == 'blue') text-blue-500 @else text-yellow-500 @endif"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2M4 16V8a2 2 0 012-2h12a2 2 0 012 2v8M4 16h16" />
                    </svg>
                </div>
                <span class="text-xs px-2 py-1 rounded-full mb-2
                    @if($product['color'] == 'green') bg-green-200 text-green-800
                    @elseif($product['color'] == 'blue') bg-blue-200 text-blue-800
                    @else bg-yellow-200 text-yellow-800 @endif">
                    {{ $product['category'] }}
                </span>
                <h2 class="text-xl font-semibold mb-2 text-gray-800">{{ $product['name'] }}</h2>
                <p class="text-gray-600 mb-4 text-center">{{ $product['desc'] }}</p>
                <div class="text-lg font-bold text-green-600 mb-4">Rp {{ number_format($product['price'], 0, ',', '.') }}</div>
                <a href="#" class="bg-green-500 text-white px-4 py-2 rounded font-semibold hover:bg-green-600 transition duration-300">Beli</a>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection