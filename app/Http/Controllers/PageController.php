<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $cart = session('cart', []); 

        $subtotal = 0;
        foreach ($cart as $item) {
            $subtotal += $item['price'] * $item['quantity'];
        }

        return view('page.bookingtable', compact('cart', 'subtotal'));
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
}