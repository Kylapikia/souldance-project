<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function home(){
        return view('content/home');
    }

    public function about(){
        return view('content/about');
    }

    public function gallery(){
        return view('content/gallery');
    }

    public function news(){
        return view('content/news');
    }
}
