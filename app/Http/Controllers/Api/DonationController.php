<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\category;
use App\product_status;
use Auth;
use App\User;
use App\donation_resarvation;
use Illuminate\Support\Facades\DB;

class DonationController extends Controller
{

    public function index()
    {
        return response()->json(product::with('creator', 'category', 'status')->get());
    }
    public function show($id)
    {
        return response()->json(product::with('creator', 'category', 'status')->find($id));
    }
    // public function update(Request $request, $id)
    // {
    //
    // }
    public function destroy($id)
    {
      return response()->json(product::find($id));
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
        return response()->json(['response' => 'ok']);
      }else {
        return response()->json(['response' => 'Unauthorized']);
      }

    }
  }
