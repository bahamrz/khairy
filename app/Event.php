<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function Organization() 
    { 
       return $this->belongsto('App\Organization');
    }
}


