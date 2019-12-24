<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\product_status;

class StatusController extends Controller
{
    public function create(){
      return view ('donations.statuscreate');
    }
    public function store(){
      $status = new product_status;

      $status->name = request('name');
      $status->save();

      return redirect()->route('donation.index');
    }
}
