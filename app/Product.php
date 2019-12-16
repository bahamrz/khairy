<?php

namespace App;
use App\product;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  public function category(){
    return $this->belongsTo('App/Category');
  }
}
