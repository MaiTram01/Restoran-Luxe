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
}
