<?php

namespace App;
 use App\Event;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function Organization(){ 
       return $this->belongsto('App\Organization');
    }
    public function participations(){
        // return $this->belongsToMany('App\Participation', 'participations' , 'user_id', 'even_id')->withTimestamps();
        // return $this->belongsToMany('App\Participation', 'participations', 'even_id', 'user_id');
        return $this->belongsToMany('App\User', 'participations', 'even_id', 'user_id');
    
      }


}


