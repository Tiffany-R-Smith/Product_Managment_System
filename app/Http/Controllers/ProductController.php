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

    public function collegeProducts()
    {
        $collegeProducts = Product::where('license_type', 'like', '%College%')->get();
        return view('admin.scheduleA')->with('products', $collegeProducts);
    }

    public function athleisureProducts()
    {
        $athleisureProducts = Product::where('license_type', 'like', '%Athleisure%')->get();
        return view('admin.scheduleA')->with('products', $athleisureProducts);
    }

    public function entertainmentProducts()
    {
        $entertainmentProducts = Product::where('license_type', 'like', '%Entertainment%')->get();
        return view('admin.scheduleA')->with('products', $entertainmentProducts);
    }

    public function militaryProducts()
    {
        $militaryProducts = Product::where('license_type', 'like', '%Military%')->get();
        return view('admin.scheduleA')->with('products', $militaryProducts);
    }

    public function mlbProducts()
    {
        $mlbProducts = Product::where('license_type', 'like', '%MLB%')->get();
        return view('admin.scheduleA')->with('products', $mlbProducts);
    }

    public function nbaProducts()
    {
        $nbaProducts = Product::where('license_type', 'like', '%NBA%')->get();
        return view('admin.scheduleA')->with('products', $nbaProducts);
    }

    public function nflProducts()
    {
        $nflProducts = Product::where('license_type', 'like', '%NFL%')->get();
        return view('admin.scheduleA')->with('products', $nflProducts);
    }

    public function nhlProducts()
    {
        $nhlProducts = Product::where('license_type', 'like', '%NHL%')->get();
        return view('admin.scheduleA')->with('products', $nhlProducts);
    }

    public function genericProducts()
    {
        $genericProducts = Product::where('license_type', 'like', '%Generic%')->get();
        return view('admin.scheduleA')->with('products', $genericProducts);
    }

    public function personalizationProducts()
    {
        $personalizationProducts = Product::where('license_type', 'like', '%Personalization%')->get();
        return view('admin.scheduleA')->with('products', $personalizationProducts);
    }
}
