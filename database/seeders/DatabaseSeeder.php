<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

         \App\Models\User::factory()->create([
             'name' => 'Zakiul',
             'email' => 'admin@gmail.com',
             'password'=>'123456'
         ]);
    }
}
