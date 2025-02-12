<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Opsional

class CatalogController extends Controller
{
    public function index()
    {
        $products = [
            ['name' => 'Red Dress', 'price' => 250000, 'image' => asset('storage/images/Reddress.jpg')],
            ['name' => 'Blue Skirt', 'price' => 150000, 'image' => asset('storage/images/Blueskirt.jpg')],
            ['name' => 'Black Trousers', 'price' => 200000, 'image' => asset('storage/images/Blackjeans.jpg')],
            ['name' => 'Denim Jeans', 'price' => 180000, 'image' => asset('storage/images/Denimjeans.jpg')],
        ];

        return view('catalog', compact('products'));
    }
}
