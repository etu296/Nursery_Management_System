<?php

namespace Database\Seeders;

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
       $this->call([CetagoryTableSeeder::class]); // \App\Models\User::factory(10)->create();
       $this->call([productTableSeeder::class]); // \App\Models\User::factory(10)->create();
       $this->call([ProductCetagoryseeder::class]); // \App\Models\User::factory(10)->create();
       $this->call([UserTableSeeder::class]); // \App\Models\User::factory(10)->create();
       $this->call([PlantTableSeeder::class]); // \App\Models\User::factory(10)->create();



    }
}
