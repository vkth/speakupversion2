<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Commendation extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getDateAttribute()
    {
        return (new Carbon($this->date_of_incident))->format('m-d-Y');
    }

    public function getTimeAttribute()
    {
        return (new Carbon($this->date_of_incident))->format('H:i A');
    }

    protected $fillable = [
        'date',
        'time',
        'narrative'
       ];
   
       public function getRouteKeyName()
       {
           return 'date';
       }

    public function dashboard(){
        return $this->belongsTo('App\Dashboard');
    }

    public function mobileappuser(){
        return $this->belongsTo('App\MobileAppUser');
  }
}
