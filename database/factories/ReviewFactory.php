<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Review;
use Faker\Generator as Faker;

$factory->define(Review::class, function (Faker $faker) 
{
    return [
      
        'body_plate'=>$faker->numberBetween(0001,9999),
        'ratings'=>$faker->numberBetween(0,5),
        'narrative'=>$faker->sentence(),
        'vehicle' =>$faker->numberBetween(1,4),
        'user_id' =>$faker->numberBetween(1,999),
       
    ];
});
