<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Review extends Model
{
    public function dashboard(){
        return $this->belongs('App\Dashboard');
    }
}
