<?php

namespace App;
use App\product;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  public function category(){
    return $this->belongsTo('App/Category');
  }
  public function status(){
    return $this->belongsTo('App/product_status');
  }
  public function users(){
    return $this->belongsToMany('App/users','donation_resarvations');
  }
}
