<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\User\DashboardUserController;
use App\Http\Controllers\User\ProductUserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/dashboard', function () {
//     return view('user.dashboard.landingpage');
// });
Route::view('/login', 'auth.login')->name('login');
Route::view('/register', 'auth.register')->name('register');
// Route::get('/products', function () {
//     $products = [
//         [
//             'name' => 'Sneakers Classic',
//             'price' => 350000,
//             'desc' => 'Sneakers klasik yang nyaman untuk sehari-hari.',
//             'category' => 'Sneakers',
//             'color' => 'green'
//         ],
//         [
//             'name' => 'Sneakers Sporty',
//             'price' => 420000,
//             'desc' => 'Sneakers sporty untuk aktivitas luar ruangan.',
//             'category' => 'Sneakers',
//             'color' => 'green'
//         ],
//         [
//             'name' => 'Running Pro',
//             'price' => 480000,
//             'desc' => 'Sepatu lari profesional, ringan dan nyaman.',
//             'category' => 'Running',
//             'color' => 'blue'
//         ],
//         [
//             'name' => 'Running Basic',
//             'price' => 320000,
//             'desc' => 'Pilihan ekonomis untuk pemula lari.',
//             'category' => 'Running',
//             'color' => 'blue'
//         ],
//         [
//             'name' => 'Formal Elegant',
//             'price' => 500000,
//             'desc' => 'Sepatu formal elegan untuk acara resmi.',
//             'category' => 'Formal',
//             'color' => 'yellow'
//         ],
//         [
//             'name' => 'Formal Classic',
//             'price' => 450000,
//             'desc' => 'Desain klasik, cocok untuk kerja dan pesta.',
//             'category' => 'Formal',
//             'color' => 'yellow'
//         ],
//     ];
//     return view('user.product.all-products', compact('products'));
// });

Route::get('/dashboard', [DashboardUserController::class, 'index'])->name('user.dashboard');
Route::get('/user/products', [ProductUserController::class, 'index'])->name('user.product.index');

// Sneakers
Route::get('/products/1', function () {
    $products = [
        [
            'name' => 'Sneakers Classic',
            'price' => 350000,
            'desc' => 'Sneakers klasik yang nyaman untuk sehari-hari.',
        ],
        [
            'name' => 'Sneakers Sporty',
            'price' => 420000,
            'desc' => 'Sneakers sporty untuk aktivitas luar ruangan.',
        ],
    ];
    $title = 'Daftar Sneakers';
    $iconColor = 'green';
    return view('user.product.product-list', compact('products', 'title', 'iconColor'));
});

// Running
Route::get('/products/2', function () {
    $products = [
        [
            'name' => 'Running Pro',
            'price' => 480000,
            'desc' => 'Sepatu lari profesional, ringan dan nyaman.',
        ],
        [
            'name' => 'Running Basic',
            'price' => 320000,
            'desc' => 'Pilihan ekonomis untuk pemula lari.',
        ],
    ];
    $title = 'Daftar Running Shoes';
    $iconColor = 'blue';
    return view('user.product.product-list', compact('products', 'title', 'iconColor'));
});

// Formal
Route::get('/products/3', function () {
    $products = [
        [
            'name' => 'Formal Elegant',
            'price' => 500000,
            'desc' => 'Sepatu formal elegan untuk acara resmi.',
        ],
        [
            'name' => 'Formal Classic',
            'price' => 450000,
            'desc' => 'Desain klasik, cocok untuk kerja dan pesta.',
        ],
    ];
    $title = 'Daftar Formal Shoes';
    $iconColor = 'yellow';
    return view('user.product.product-list', compact('products', 'title', 'iconColor'));
});