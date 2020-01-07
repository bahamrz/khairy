<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\category;
use Gate;

class CategoryController extends Controller
{
  
  public function __construct()
  {
      $this->middleware('auth'); //Protects entire Controller
  }
    public function create(){
      if(Gate::denies('manage-users')){
        return redirect(route('users.index'));
    }
      return view('donations.categorycreate');
    }

    public function store(){

      $category = new category;

      $category->name = request('name');
      $category->save();

      return redirect()->back();
    }
}
