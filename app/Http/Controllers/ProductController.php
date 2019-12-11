<?php

namespace App\Http\Controllers;
use App\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create(){
      return view('donations.create');
    }
    public function productstore(){
      $product1 = new Product;

      $product1->name = request('name');
      $product1->description = request('description');
      $product1->status = false;
      $product1->save();

      return redirect()->route('donation.index');
    }
}
