<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class donation_resarvation extends Model
{
    public function users(){
      return $this->belongsToMany('App\User')
    }
    public function products(){
      return $this->belongsToMany('App\product');
    }

}
