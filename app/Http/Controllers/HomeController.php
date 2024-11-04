<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::with('images')->get();
        return view('index', [
            'title' => 'Home',
            'products' => $products
        ]);
    }
}
