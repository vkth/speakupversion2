<?php

use Illuminate\Database\Seeder;
use App\Complaint;
use App\Commendation;
use App\Review;
use App\User;
use App\Verify;
use App\Mobileappuser;
use App\Vehicle;
use App\Operator;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    $user = factory(User::class)->create();
    $user->role = "Admin";
    $user->email = "admin@gmail.com";
    $user->password=bcrypt('password');
    $user->save();

      factory(Mobileappuser::class,50)->create();
      factory(Complaint::class,50)->create();
      factory(Commendation::class,50)->create();
      factory(Review::class,50)->create();
      factory(Operator::class,50)->create();
      factory(Vehicle::class,50)->create();

    }

}
