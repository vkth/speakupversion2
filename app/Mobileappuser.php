<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobileappuser extends Model
{
    protected $fillable = [
        'id',
        'status',
    
    ];

     protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

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
