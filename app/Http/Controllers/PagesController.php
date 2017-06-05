<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
      
    public function contact()
    {
        return view('front.contact');
    }
    public function checkout()
    {
        return view('front.checkout');
    }
    
}
