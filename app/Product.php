<?php

namespace App;
use App\product;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  public function category(){
    return $this->belongsTo('App\Category');
  }
  public function status(){
    return $this->belongsTo('App\product_status');
  }
  public function creator(){
    return $this->belongsTo('App\User', 'user_id');
  }
  public function reservers(){
    return $this->belongsToMany('App\donation_resarvation', 'donation_resarvations' , 'product_id', 'user_id')->withTimestamps();

  }
}
