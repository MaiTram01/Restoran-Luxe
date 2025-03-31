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
        return view('page.bookingtable');
    }
}