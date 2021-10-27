<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Review extends Model
{
    protected $fillable = ['status', 'body_plate', 'vehicle',  'id', 'mobileappuser_id', 'narrative',  ];

    public function dashboard(){
        return $this->belongs('App\Dashboard');
    }

    public function mobileappuser(){
        return $this->belongsTo('App\MobileAppUser');
    }

    public function vehicle(){
        return $this->belongsTo('App\Vehicle');
    }
}
