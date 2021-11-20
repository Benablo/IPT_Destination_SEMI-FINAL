<?php

use App\Destination;
use Illuminate\Database\Seeder;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [    
              'id'=> 1,
              'name'=> 'BAZAK',
              'address'=> 'Tubigon, Bohol',
              'type'=> 'Mark',
              'rating'=> 1,
  
          ],
          [

            'id'=> 2,
              'name'=> 'Staples',
              'address'=> 'Los Angeles, California',
              'type'=> 'James',
              'rating'=> 2,
  


          ],
          [

            'id'=> 3,
              'name'=> 'Seaside',
              'address'=> 'Cebu, City',
              'type'=> 'Yao',
              'rating'=> 3,
   
            ],
            [

              'id'=> 4,
              'name'=> 'Chocolate Hills',
              'address'=> 'Carmen, Bohol',
              'type'=> 'Tarsier',
              'rating'=> 4,

            ],
            [

                'id'=> 5,
                'name'=> 'Sport Complex',
                'address'=> 'Manila, City',
                'type'=> 'Bong',
                'rating'=> 5,

            ]

        ];
  
        foreach($data as $d){
            \App\Destination::create($d);
        }
    }
}
