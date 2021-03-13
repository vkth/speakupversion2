<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Complaint;
use Faker\Generator as Faker;

$factory->define(Complaint::class, function (Faker $faker) {

    return [
        
        'body_plate'=>$faker->numberBetween(0001,9999),
        'user_id' =>$faker->numberBetween(1,999),
        'date'=>$faker->date(),
        'time'=>$faker->time(),
        'narrative'=>$faker->sentence(),
        'vehicle' =>$faker->numberBetween(1,4),
        'file'=>$faker->fileExtension(),
        'status'=>$faker->numberBetween(1,2),
    ];
});
