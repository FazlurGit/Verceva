<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index()
    {
        $products = [
            ['name' => 'Red Dress', 'price' => 250000, 'image' => asset('images/red-dress.jpg')],
            ['name' => 'Blue Skirt', 'price' => 150000, 'image' => asset('images/blue-skirt.jpg')],
            ['name' => 'Black Trousers', 'price' => 200000, 'image' => asset('images/black-trousers.jpg')],
            ['name' => 'Denim Jeans', 'price' => 180000, 'image' => asset('images/denim-jeans.jpg')],
        ];

        return view('catalog', compact('products'));
    }
}
