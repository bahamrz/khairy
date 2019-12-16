<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\category;

class DonationController extends Controller
{
    public function index(){
      $product = product::latest()->get();
      return view ('donations.index',compact('product'));
    }

    public function create(){
      $category = category::all();
      return view('donations.create',compact('category'));
    }

    public function productstore(){
      $product1 = new Product;

      $product1->name = request('name');
      $product1->description = request('description');
      $product1->Available = false;
      $product1->category_id = request('category');
      $product1->save();

      return redirect()->route('donation.index');
    }
}
