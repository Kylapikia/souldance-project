<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function home(){
        return view('contents/home');
    }

    public function about(){
        return view('contents/about');
    }

    public function gallery(){
        return view('contents/gallery');
    }

    public function news(){
        return view('contents/news');
    }
}
