<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    public function index()
    {
        return view('home'); 
    }

    public function about()
    {
        return view('about'); 
    }

    public function academics()
    {
        return view('academics'); 
    }

    public function admissions()
    {
        return view('admissions');
    }

    public function blog()
    {
        return view('blog'); 
    }

    public function contact()
    {
        return view('contact'); 
    }
}
