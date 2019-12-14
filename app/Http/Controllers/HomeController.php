<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class HomeController extends Controller
{
    public function index()
    {
        $product = product::latest()->get();
        return view('Home.index');
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
