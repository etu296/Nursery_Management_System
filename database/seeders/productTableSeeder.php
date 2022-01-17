<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class productTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([   
        'product_name'=>'Alovera',
        'product_price'=>'120',
        'products_details'=>'Aloe Vera is a succulent leaf plant that is well known for its health and beauty benefits.',
        'product_cetagory'=>'1',
        'plant_cetagory'=>'7',
        'product_image'=>'20211127071103.jpg' ,
           
    ]);
    Product::create([   
        'product_name'=>'Potassium chloride',
        'product_price'=>'320',
        'products_details'=>'Potassium nitrate (KNO3) is mainly used in intensive horticulture under glass. Low-analysis chloride-based fertilizers (kainite) are crude or partly processed mineral salts. Chemically, they are mixtures of KCl and NaCl.',
        'product_cetagory'=>'3',
        'plant_cetagory'=>'7',
        'product_image'=>'p2.jpg' ,
           
    ]);
    Product::create([   
        'product_name'=>'Organic soil',
        'product_price'=>'150',
        'products_details'=>'Organic soil is composed primarily of plant materials, and often amended with compost to ensure its nutrient levels are optimized to cultivate plant life.',
        'product_cetagory'=>'4',
        'plant_cetagory'=>'7',
        'product_image'=>'p6.jpg' ,
           
    ]);
    Product::create([   
        'product_name'=>'Flower Pots',
        'product_price'=>'220',
        'products_details'=>'Flowerpots have a number of uses such as transporting plants to new locations, starting seeds, patio and indoor cultivation of plants, and the growing of tender plants in colder regions indoors.',
        'product_cetagory'=>'5',
        'plant_cetagory'=>'7',
        'product_image'=>'20220109110139.jpg' ,
           
    ]);
    Product::create([   
        'product_name'=>'Hand Trowel',
        'product_price'=>'130',
        'products_details'=>'A trowel is a small hand tool used for digging, applying, smoothing, or moving small amounts of viscous or particulate material.',
        'product_cetagory'=>'2',
        'plant_cetagory'=>'7',
        'product_image'=>'p1.jpg' ,
           
    ]);
    }
}
