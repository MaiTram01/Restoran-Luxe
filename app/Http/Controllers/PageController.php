<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class PageController extends Controller
{
    public function home()
    {
        return view('page.homepage');
    }
    public function menu()
    {
        return view('page.menu');
    }
    public function contact()
    {
        return view('page.contact');
    }
    public function about()
    {
        return view('page.about');
    }
    public function reservation()
    {
        return view('page.reservation');
    }
    public function login()
    {
        return view('users.login');
    }
    public function register()
    {
        return view('users.register');
    }
    public function bookingtable()
    {
        return view('page.bookingtable');
    }
    public function payment()
    {
        return view('page.payment');
    }
    public function bookingpayment()
    {
        return view('page.bookingpayment');
    }
    public function infobooking()
    {
        return view('page.infobooking');
    }
    public function productdetail($productId)
    {
        $product = Item::with('category')->find($productId); 
        if (!$product) {
            return redirect()->route('home')->with('error', 'Product not found.');
        }
        $relatedProducts = Item::where('category_id', $product->category_id)
                                ->where('id', '!=', $productId) 
                                ->take(4)
                                ->get();
        return view('page.productdetail', compact('product', 'relatedProducts'));
    }   
}