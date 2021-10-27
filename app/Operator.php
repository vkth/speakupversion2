<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Operator extends Model
{
    protected $fillable = ['name', 'address', 'phone_number', 'operator_id'];

    public function vehicle(){
         
        return $this->hasMany('App\Vehicle');

    }
}

