<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()

    {

        /*  \App\Models\User::factory(10)->create(); */

       /*      User::create([

            'name' => 'Zakiul Islam',

            'email' => 'abc@gmail.com',

            'password' => bcrypt('123456'),

        ]); */
        $this->call([
        CompanySeeder::class,
        EmployeeSeeder::class
      
    ]);
     
    }
}
