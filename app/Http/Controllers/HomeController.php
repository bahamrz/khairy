<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
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
