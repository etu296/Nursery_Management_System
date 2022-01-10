<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Era',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('121212'),
            'number'=>'01313225159',
            'role'=>'admin'
        ]);
    }
}
