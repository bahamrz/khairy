<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Event;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return "hi";
        // return view('home');
        $product = product::latest()->take(3)->get();
        $Event = Event::latest()->take(3)->get();
        return view('Home.index',compact('product'),compact('Event'));

    }
}
