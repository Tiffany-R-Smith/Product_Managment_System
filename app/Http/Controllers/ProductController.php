<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function displayProducts()
    {
        $products = Product::all(); // Fetch products from the 'products' table (adjust if needed)
        return view('admin.scheduleA')->with('products', $products);
    }
}
