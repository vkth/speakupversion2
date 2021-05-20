<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{
    protected $fillable = [
        'status', 
        'body_plate', 
        'vehicle', 
        'admin_id'
        'date',
        'time',
        'narrative'
    
    
    ];

    public function complaint(){
          return $this->hasMany('App\Complaint');
    }
    public function review(){
        return $this->hasMany('App\Review');
    }
    public function commendation(){
        return $this->hasMany('App\Commendation');
  }
}
