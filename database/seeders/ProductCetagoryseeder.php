<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pcetagory;

class ProductCetagoryseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pcetagory::create([
            'pcname'=>'Category 1',
            'pc_description'=>'first category',
           ]);
           Pcetagory::create([
            'pcname'=>'Category 2',
            'pc_description'=>'second category',
            
           ]);
    }
}
