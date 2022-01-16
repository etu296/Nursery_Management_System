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
            'pcname'=>'Plants',
            'pc_description'=>'All Plants',
           ]);
           Pcetagory::create([
            'pcname'=>'Tools',
            'pc_description'=>'Tools that cut, drill, or wear down surfaces include the knife, drill, saw, file, chisel, and plane. ',
            
           ]);
           Pcetagory::create([
            'pcname'=>'Fertilizer',
            'pc_description'=>'Controlled-release fertilizer was used as it commonly applied in the nursery industry to regulate the timing of nutrient release into the plant root zone.  ',
            
           ]);
           Pcetagory::create([
            'pcname'=>'Soil',
            'pc_description'=>'The soil must preferably be loam or sandy loam with large quantity of organic matter. The pH of the soil must be near neutral (6.5 – 7.5). It must have adequate water retention capacity and aeration.  ',
            
           ]);
           Pcetagory::create([
            'pcname'=>'Flower Pots',
            'pc_description'=>'Flowerpots have a number of uses such as transporting plants to new locations, starting seeds, patio and indoor cultivation of plants, and the growing of tender plants in colder regions indoors.',
            
           ]);
           Pcetagory::create([
            'pcname'=>'None',
            'pc_description'=>'None.',
            
           ]);
    }
}
