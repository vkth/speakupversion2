<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Operator;
use Faker\Generator as Faker;

$factory->define(Operator::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'phone_number' => $faker->phoneNumber,
        'address'=>$faker->address,
        
    ];
});
