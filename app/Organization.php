<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    public function Event() 
    { 
       return $this->hasMany('app/Event');
    }
}
   
