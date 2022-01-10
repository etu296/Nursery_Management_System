<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CetagoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Category::create([
        'C_name'=>'Category 1',
        'C_deacription'=>'first category'
        
       ]);
       Category::create([
        'C_name'=>'Category 2',
        'C_deacription'=>'second category'
        
       ]);
    }
}
