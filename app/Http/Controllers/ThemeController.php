<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemeController extends Controller
{

    public function index()
    {
        return view('theme.index');
    }

    public function about()
    {
        return view('theme.about');
    }

    public function contact()
    {
        return view('theme.contact');
    }

    public function blog()
    {
        return view('theme.blog');
    }

    public function testimonial()
    {
        return view('theme.testimonial');
    }
}
