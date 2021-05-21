<?php
/*
Developers:   1. Diana Gee Delas Alas
              2. Jane Kristine Ferrer
              3. Dianne Russel Ocampo

Contributors: Galvo, Jose Bryan @ fb.me/jb.galvo


Note: Contact IT Administrator for more information or
If Readme.md and Full documentation are provided please checkout
those files for more details before you proceed exploring this file. Thank you :)

Made for ownership of:

                     $$$$$$\  $$$$$$$\  $$\      $$\
                    $$  __$$\ $$  __$$\ $$ | $\  $$ |
                    $$ /  \__|$$ |  $$ |$$ |$$$\ $$ |
                    \$$$$$$\  $$ |  $$ |$$ $$ $$\$$ |
                     \____$$\ $$ |  $$ |$$$$  _$$$$ |
                    $$\   $$ |$$ |  $$ |$$$  / \$$$ |
                    \$$$$$$  |$$$$$$$  |$$  /   \$$ |
                     \______/ \_______/ \__/     \__|


SDW WEB SOLUTIONS. All Rights Reserved. */

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\User;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /****************************************************************************************
         $$$$$$\ $$\     $$\  $$$$$$\         $$$$$$\  $$$$$$$\  $$\      $$\ $$$$$$\ $$\   $$\
        $$  __$$\\$$\   $$  |$$  __$$\       $$  __$$\ $$  __$$\ $$$\    $$$ |\_$$  _|$$$\  $$ |
        $$ /  \__|\$$\ $$  / $$ /  \__|      $$ /  $$ |$$ |  $$ |$$$$\  $$$$ |  $$ |  $$$$\ $$ |
        \$$$$$$\   \$$$$  /  \$$$$$$\        $$$$$$$$ |$$ |  $$ |$$\$$\$$ $$ |  $$ |  $$ $$\$$ |
         \____$$\   \$$  /    \____$$\       $$  __$$ |$$ |  $$ |$$ \$$$  $$ |  $$ |  $$ \$$$$ |
        $$\   $$ |   $$ |    $$\   $$ |      $$ |  $$ |$$ |  $$ |$$ |\$  /$$ |  $$ |  $$ |\$$$ |
        \$$$$$$  |   $$ |    \$$$$$$  |      $$ |  $$ |$$$$$$$  |$$ | \_/ $$ |$$$$$$\ $$ | \$$ |
         \______/    \__|     \______/       \__|  \__|\_______/ \__|     \__|\______|\__|  \__|


        Description: Create data for SYSTEM Administrator for SDW
        *****************************************************************************************/

        // Dianne Ocampo - USER DATA
        DB::table('users')->insert([
            'username'                  =>  'dianne.ocampo',
            'email'                     =>  'dianne.sdwojt2021@gmail.com',
            'password'                  =>  bcrypt('123456!'),
            'is_password_temporary'     =>  false,
            'settings_color_accent'     =>  'purple',
            

        ]); //end insert, ID = 2

        // Assign role to Dianne Ocampo
        $user = User::where('id', 3)->first();
       
         // Gee Delas Alas - USER DATA
         DB::table('users')->insert([
            'username'                  =>  'gee.delasalas',
            'email'                     =>  'dianagee.sdwojt2021@gmail.com',
            'password'                  =>  bcrypt('123456!'),
            'is_password_temporary'     =>  false,
            'settings_color_accent'     =>  'purple',
            'is_disabled'               =>  false,
           
        ]); //end insert, ID = 4

            // Assign role to Gee Delas Alas
        $user = User::where('id', 4)->first();
        
          // Tin Ferrer - USER DATA
          DB::table('users')->insert([
             'username'                  =>  'tin.ferrer',
             'email'                     =>  'janekirstine.sdwojt2021@gmail.com',
             'password'                  =>  bcrypt('123456!'),
             'is_password_temporary'     =>  false,
             'settings_color_accent'     =>  'purple',
             'is_disabled'               =>  false,
             

         ]); //end insert, ID = 5

         // Assign role to Tin Ferrer
         $user = User::where('id', 5)->first();
        

    }
}
