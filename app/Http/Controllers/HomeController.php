<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class HomeController extends Controller
{
    public function index()
    {
        $product = product::latest()->take(3)->get();
        return view('Home.index',compact('product'));
    }
    public function signin()
    {
        return view('Signin.tempsignin');
    }
    public function signup()
    {
        return view('Signin.tempsignup');
    }
}
