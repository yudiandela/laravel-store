<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\StoreProductRequest;
use App\Http\Requests\Product\UpdateProductRequest;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::get();
        return response()->json([
            'message' => 'Show all products!',
            'data' => $products
        ]);
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
    public function store(StoreProductRequest $request)
    {
        $name = $request->input('name');
        $description = $request->input('description');
        $enable = $request->boolean('enable');

        $product = Product::create([
            'name' => $name,
            'description' => $description,
            'enable' => $enable
        ]);

        return response()->json([
            'message' => 'Product has been created!',
            'data' => $product
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return response()->json([
            'message' => 'Show product!',
            'data' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $name = $request->input('name');
        $description = $request->input('description');
        $enable = $request->boolean('enable');

        $product->update([
            'name' => $name,
            'description' => $description,
            'enable' => $enable
        ]);

        return response()->json([
            'message' => 'Product has been updated!',
            'data' => $product
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return response()->json([
            'message' => 'Product has been deleted!',
            'data' => null
        ]);
    }
}
