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
        // $this->middleware('auth'); //Protects entire Controller
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
    public function view($id)
    {
        // return view('products.show', [
        //     'product' => Product::with('category')->find($id)
        // ]);
        return view('Home.view',['product'=>product::find($id)]);
    }
    public function viewe($id)
    {
        return view('Home.viewe',['event'=>Event::find($id)]);    
    }

}
