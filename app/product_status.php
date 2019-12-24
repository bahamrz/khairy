<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_status extends Model
{
    public function product(){
      return $this->hasMany('App\product');
    }
}
