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
        'C_name'=>'Common House Plants',
        'C_deacription'=>'Most people choose a commonly known house plant because they are sold in many stores and easy to obtain. '
        
       ]);
       Category::create([
        'C_name'=>'Flowering house plants ',
        'C_deacription'=>'Flowering house plants have become increasingly popular over the last few decades and its easy to see why.'
        
       ]);
       Category::create([
        'C_name'=>'Fruts Plants ',
        'C_deacription'=>'A fruit is a mature, ripened ovary, along with the contents of the ovary.'
        
       ]);
       Category::create([
        'C_name'=>'Easy and Low Light Plants ',
        'C_deacription'=>'most of us have rooms and others have a whole house that does not get a lot of sun light, which so many plants need to grow well (or even survive).'
        
       ]);
       Category::create([
        'C_name'=>'CACTUS',
        'C_deacription'=>'Cactus house plants are available in all sorts of weird and wonderful shapes, and sizes.'
        
       ]);
       Category::create([
        'C_name'=>'Hanging basket plants ',
        'C_deacription'=>'Hanging basket plants provide a special touch of attractiveness and interest to window areas, conservatories and patio areas within and around the home.'
        
       ]);
       Category::create([
        'C_name'=>'None',
        'C_deacription'=>'None.'
        
       ]);
    }
}
