<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;

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
    public function update(Request $request, $id)
    {

    }
    public function destroy($id)
    {
      return response()->json(product::find($id));
    }
}
