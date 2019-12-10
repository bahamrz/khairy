<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
class DonationsController extends Controller
{
    public function index(){
      return view('donations.index', [
        'products' => Product::all()
      ]);

    }

    public function store(){
      $product1 = new Product;
      $product1->name = 'someone';
      $product1->description = 'something to discripe the product blah blah blah';
      $product1->status = false;
      $product1->save();
    }

}
