<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
         return ProductResource::collection(Product::all());
    }

    public function show($id)
    {
         return new ProductResource::(Product::findOrFail($id));
    }
}