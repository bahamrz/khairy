<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\category;
use App\product_status;
use Auth;
use App\User;

class DonationController extends Controller
{
    public function index(){
      $products = product::latest()->paginate(3);
      return view ('donations.index',compact('products'));
    }

    public function create(){
      $category = category::all();
      $status = product_status::all();
      return view('donations.create',compact('category','status'));
    }

    public function productstore(){
      $product = new Product;

      $userid = Auth::id();

      $product->name = request('name');
      $product->user_id = $userid;
      $product->description = request('description');
      $product->Available = false;
      $product->orders = 0 ;
      $product->status_id = request('status');
      $product->category_id = request('category');
      $product->image = request()->file('image') ? request()->file('image')->store('public') : null ;

      $product->save();

      return redirect()->route('donation.index');
    }

    public function edit($id)
    {
        return view('Donations.edit',  [
            'category' => Category::all(),
            'product' => Product::find($id),
            'status' => product_status::all()
        ]);
    }

    public function update($id)
    {
        $product = Product::find($id);

        if (request()->file('image')) {

            $newImagePath = request()->file('image')->store('public');

            $product->image = str_replace('public/', '', $newImagePath);
        }

        $product->name = request('name');
        $product->description = request('description');
        $product->Available = false;
        $product->status_id = request('status');
        $product->category_id = request('category');
        $product->save();

        return redirect('/donation');
    }
    public function destroy($id)
    {
        Product::find($id)->delete();

        return redirect('/donation');
    }

}
