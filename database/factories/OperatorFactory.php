<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Operator;
use Faker\Generator as Faker;

$factory->define(Operator::class, function (Faker $faker) {
    return [
        'operator_id'   =>$faker->numberBetween(0001,9999),
        'name'          =>$faker->name(),
        'phone_number'  =>$faker->phoneNumber,
        'address'       =>$faker->address,
        
    ];
});
