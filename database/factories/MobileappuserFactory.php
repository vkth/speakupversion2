<?php

use Faker\Generator as Faker;
use App\Mobileappuser;
/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Mobileappuser::class, function (Faker $faker) {
    return [
        'username'=>$faker->word(),
        'name' => $faker->name(),
        'email' => $faker->unique()->safeEmail,
        'phone_number' => $faker->phoneNumber,
        'address'=>$faker->address,
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'status'=>$faker->numberBetween(1,2),
        'admin_id' =>$faker->numberBetween(1,999),
    ];
});
