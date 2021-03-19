<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Operator extends Model
{
    protected $fillable = ['name'];

    public function vehicles(){
         
        return $this->hasMany('App\Vehicle');

    }
}

