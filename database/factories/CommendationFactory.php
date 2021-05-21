<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Commendation;
use Faker\Generator as Faker;

$factory->define(Commendation::class, function (Faker $faker) {
    
    return [
        'body_plate'=>$faker->numberBetween(0001,9999),
        'user_id' =>$faker->numberBetween(1,999),
        'date'=>$faker->date(),
        'time'=>$faker->time(),
        'narrative'=>$faker->text(),
        'file'=>$faker->fileExtension(),
        
        
    ];
});
