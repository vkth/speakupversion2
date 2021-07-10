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

}
