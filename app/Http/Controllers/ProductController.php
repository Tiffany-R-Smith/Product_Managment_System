<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all(); // Fetch products from the 'products' table (adjust if needed)
        $licenseTypes = array(
            'athleisureProducts' => 'Athleisure',
            'collegeProducts' => 'College',
            'entertainmentProducts' => 'Entertainment',
            'militaryProducts' => 'Military',
            'mlbProducts' => 'MLB',
            'nbaProducts' => 'NBA',
            'nflProducts' => 'NFL',
            'nhlProducts' => 'NHL',
            'genericProducts' => 'Generic',
            'personalizationProducts' => 'Personalization',
            // Add more route names and corresponding HTML text values as needed
        );

        return view('admin.product')->with(['products' => $products, 'licenseTypes' => $licenseTypes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /**
     * 
     */
    public function import()
    {
        //
    }

    /**
     * 
     */
    public function export()
    {

    }
}
