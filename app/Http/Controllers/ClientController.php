<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function contact(){
        return view('contact');
    }

    public function classes(){
        return view('content/classes');
    }

}
