<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function home(){
        return view('content/home');
    }

    public function about(){
        $people = [];
        return view('content/about', compact('people'));
    }

    public function gallery(){
        return view('content/gallery');
    }

    public function news(){
        return view('content/news');
    }
}
