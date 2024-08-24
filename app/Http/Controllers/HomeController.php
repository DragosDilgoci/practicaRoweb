<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Models\Product;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::with(['category', 'images'])->orderBy('name')->get();

        return Inertia::render('Home', [
            'products' => $products
        ]);
    }
}