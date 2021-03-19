<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Vehicle;
use Faker\Generator as Faker;

$factory->define(Vehicle::class, function (Faker $faker) {
    return [
        'body_plate'=>$faker->numberBetween(0001,9999),
        'operator_id' => $faker->numberBetween(1,999),
        'admin_id' => $faker->numberBetween(1,999),
        'vehicle' =>$faker->numberBetween(1,4),
        'status'=>$faker->numberBetween(1,2),
       
    ];
});
