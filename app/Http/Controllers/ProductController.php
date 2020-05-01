<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Resources\Product as ProductResource;
use App\Product;

class ProductController extends Controller
{
    public static function index()
    {
        return ProductResource::collection(Product::all());
    }

    public static function show($id)
    {
        return new ProductResource(Product::find($id));
    }
}
