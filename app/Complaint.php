<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Complaint extends Model
{
    protected $fillable = [
        'status',
        'narrative_complaint',
    
    ];
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

    public function dashboard(){
        return $this->belongsTo('App\Dashboard');
    }

    public function mobileappuser(){
        return $this->belongsTo('App\MobileAppUser');
    }

    public function vehicle(){
        return $this->belongsTo('App\Vehicle');
    }
}
