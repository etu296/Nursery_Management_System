<?php

namespace Database\Seeders;
use App\Models\Plant;
use Illuminate\Database\Seeder;

class PlanttableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plant::create([   
         'name'=>'Alovera',
         'price'=>'120',
         'quantity'=>'1',
         'discription'=>'Aloe Vera is a succulent leaf plant that is well known for its health and beauty benefits.',
         'category_id'=>'1',
         'image'=> '20211127071103.jpg'
        ]);
        Plant::create([  
            'name'=>'Money Plant',
         'price'=>'150',
         'quantity'=>'1',
         'discription'=>'Money plants are Feng Shui plants known for inviting growth and success in someones life.',
         'category_id'=>'1',
         'image'=> '20211130051151.jpg' 
            
               
        ]);
        Plant::create([   
            'name'=>'Cactus',
         'price'=>'200',
         'quantity'=>'1',
         'discription'=>'Cacti and succulents thrive with good light sources, and it is best to place cacti and succulents in a bright place. A south facing position will provide good sunlight.',
         'category_id'=>'5',
         'image'=> 'p7.jpg'
               
        ]);
        Plant::create([   
            'name'=>'Rose',
         'price'=>'100',
         'quantity'=>'1',
         'discription'=>'A rose is a woody perennial flowering plant of the genus Rosa, in the family Rosaceae, or the flower it bears. ',
         'category_id'=>'2',
         'image'=> 'p3.jpg'
               
        ]);
        Plant::create([   
            'name'=>'Strawbery',
         'price'=>'220',
         'quantity'=>'1',
         'discription'=>'The garden strawberry is a widely grown hybrid species of the genus Fragaria, collectively known as the strawberries, which are cultivated worldwide for their fruit.',
         'category_id'=>'3',
         'image'=> 'p4.jpg'
               
        ]);
        
    }
}

