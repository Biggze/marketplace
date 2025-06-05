<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductUserController extends Controller
{
public function index()
{
    $products = [
        [
            'name' => 'Sneakers Classic',
            'price' => 350000,
            'desc' => 'Sneakers klasik yang nyaman untuk sehari-hari.',
            'category' => 'Sneakers',
            'color' => 'green'
        ],
        [
            'name' => 'Running Pro',
            'price' => 480000,
            'desc' => 'Sepatu lari profesional, ringan dan nyaman.',
            'category' => 'Running',
            'color' => 'blue'
        ],
    ];
    return view('user.product.all-products', compact('products'));
}
}
