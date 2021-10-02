<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {
        $products = Products::where('status', true)->paginate(12);
        return view('front.products', compact('products'));
    }
    public function show($slug) {
        $product = Products::where('slug', '=', $slug)->firstOrFail();
        return view('front.showproduct', compact('product'));
    }
    public function search(Request $request) {
        $search = $request->input('search');
        $products = Products::query()
        ->where('name', 'LIKE', "%{$search}%")
        ->orWhere('description', 'LIKE', "%{$search}%")
        ->orWhere('saveur', 'LIKE', "%{$search}%")
        ->paginate(9);
        return view('front.search', compact('products'));
    }
}
