<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class donation_resarvation extends Model
{
    

    public function user_id(){
      return $this->belongsToMany('App/users')

    }
}
