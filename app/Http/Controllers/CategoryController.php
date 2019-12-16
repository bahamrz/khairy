<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\category;

class CategoryController extends Controller
{
    public function create(){
      return view('donations.categorycreate');
    }

    public function store(){

      $category = new category;

      $category->name = request('name');
      $category->save();

      return redirect()->route('donation.index');
    }
}
