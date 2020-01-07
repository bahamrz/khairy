<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\product_status;
use Gate;
class StatusController extends Controller
{
  

  public function __construct()
  {
      $this->middleware('auth'); //Protects entire Controller
  }
  
    public function create(){
      if(Gate::denies('manage-users')){
        return redirect(route('users.index'));
    }
      return view ('donations.statuscreate');
    }
    public function store(){
      $status = new product_status;

      $status->name = request('name');
      $status->save();

      return redirect()->back();
    }
}
