<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\product;
use App\Event;
use App\User;
use App\donation_resarvation;
use Auth;

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
        // return Redirect::to("/")->withSuccess('Success order');
        // return "hi";
        // return view('home');
        $products = product::latest()->take(3)->get();
        $Event = Event::latest()->take(3)->get();
        return view('Home.index',compact('products'),compact('Event'));
    }
    public function view($id)
    {

        // return view('products.show', [
        //     'product' => Product::with('category')->find($id)
        // ]);

        // $userid= product::find($id)->get($user_id);

        return view('Home.view',['product'=>product::find($id)]);
    }
    public function viewe($id)
    {
        return view('Home.viewe',['event'=>Event::find($id)]);
    }
    public function store($id){
      // $reserve = new donation_resarvation;
      // $reservedUser = Auth::id();
      //
      // $reserve->user_id = $reservedUser;
      // $reserve->product_id = $id;
      //
      // $reserve->save();
      $user_request  = donation_resarvation::where('user_id',Auth::getUser()->id)
                                            ->where('product_id',product::find($id)->id)
                                            ->first(); // you can use count() or exists();

      if (is_null($user_request)) {
        $product = product::find($id);
        $product->orders++;
        $product->save();

        Product::find($id)->reservers()->attach(auth()->user());
        return redirect()->route('donation.index')->withSuccess('Your Order was Seccessful ! , some one will contact you soon if they choose you for there donation ')->with($user_request);
      }else {
        return redirect()->route('donation.index')->withFail('Your Order already been submitted !');
      }

    }
}
