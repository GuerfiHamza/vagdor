<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
class LandingController extends Controller
{
    public function index() {
        $products = Products::where('status', true)->paginate(6);
        return view('welcome', compact('products'));
    }
}
