<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
class DonationController extends Controller
{
    public function index(){
      $products = product::all();
      return view ('donations.index',compact('products'));

    }

}
