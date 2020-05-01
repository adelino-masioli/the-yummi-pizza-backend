<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Resources\ProductStock as ProductStockResource;
use App\Product;
use App\ProductStock;

class StockController extends Controller
{
    public static function index($id)
    {
        return ProductStockResource::collection(Product::find($id)->stock);
    }
}
