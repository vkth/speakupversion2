<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Vehicle extends Model
{
      protected $fillable = ['status', 'body_plate', 'vehicle',  'id', 'operator_id', 'review', 'complaint' ];

      public function operator(){
            return $this->belongsTo('App\Operator', 'operator_id');
      }
      
      public function mobileappuser(){
        return $this->belongsTo('App\MobileAppUser');
      }

      public function complaint(){
         
            return $this->hasMany('App\Complaint');
    
        }
    
        public function commend(){
             
            return $this->hasMany('App\Commendation');
    
        }
    
        public function review(){
             
            return $this->hasMany('App\Review');
    
        }


}
