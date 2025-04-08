<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Item;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function getCategories()
    {
        $categories = Category::all();

        return view('page.homepage', compact('categories'));
    }

    public function getProductsByCategory($category_id)
    {
        $products = Item::where('category_id', $category_id)->get();
        return response()->json($products);
    }
}

