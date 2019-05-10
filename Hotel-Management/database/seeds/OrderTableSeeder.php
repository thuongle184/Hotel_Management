<?php

use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert ([
            ['bill_id'=> '1', 'dish_id'=> '1'],
            ['bill_id'=> '1', 'dish_id'=> '2'],
            ['bill_id'=> '1', 'dish_id'=> '6'],
            ['bill_id'=> '2', 'dish_id'=> '1'],
            ['bill_id'=> '3', 'dish_id'=> '4'],
            ['bill_id'=> '4', 'dish_id'=> '6'],
            ['bill_id'=> '4', 'dish_id'=> '3'],
            
            
                      
        ]);
    }
}
