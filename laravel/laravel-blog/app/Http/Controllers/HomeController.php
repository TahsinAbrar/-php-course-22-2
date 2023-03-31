<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function about()
    {
        return view('about');
    }
}