<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participation extends Model
{
    public function users(){
        return $this->belongsToMany('App\User');
      }
      public function events(){
        return $this->belongsToMany('App\Event');
      }
}
