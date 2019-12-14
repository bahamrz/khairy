<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class DonationController extends Controller
{
    public function index(){
      $product = product::latest()->get();
      return view ('donations.index',compact('product'));
    }

    public function create(){
      return view('donations.create');
    }

    public function productstore(){
      $product1 = new Product;

      $product1->name = request('name');
      $product1->description = request('description');
      $product1->Available = false;
      $product1->save();

      return redirect()->route('donation.index');
    }
}
