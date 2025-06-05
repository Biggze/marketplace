@extends('layout.app')

@section('content')
<section class="flex items-center justify-center min-h-screen bg-gray-50">
    <div class="bg-white p-8 rounded shadow-md w-full max-w-md">
        <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Daftar ShoeMarket</h2>
        <form>
            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Nama Lengkap</label>
                <input type="text" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-400" placeholder="Nama Lengkap" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Email</label>
                <input type="email" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-400" placeholder="Email" required>
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 mb-2">Password</label>
                <input type="password" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-400" placeholder="Password" required>
            </div>
            <button type="submit" class="w-full bg-green-500 text-white py-2 rounded hover:bg-green-600 transition">Daftar</button>
        </form>
        <p class="mt-4 text-center text-gray-600">Sudah punya akun? <a href="/login" class="text-green-500 hover:underline">Masuk</a></p>
    </div>
</section>
@endsection