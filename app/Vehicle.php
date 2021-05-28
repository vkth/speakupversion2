<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Vehicle extends Model
{
      protected $fillable = ['status', 'body_plate', 'vehicle', 'admin_id', 'operator_id'];

      public function operator(){
            return $this->belongsTo('App\Operator');
      }


}
