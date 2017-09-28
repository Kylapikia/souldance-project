<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function contact(){
        return view('contact');
    }

    public function adultclass(){
        return view('classes/adult');
    }

    public function kidclass(){
        return view('classes/kid');
    }
}
