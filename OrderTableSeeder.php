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
        DB::table('orders')->insert([
         	['cus_id'=>'1', 'food_id'=>'1', 'quantity'=>'5', 'note'=>'nothing'],
         	['cus_id'=>'2', 'food_id'=>'2', 'quantity'=>'1', 'note'=>'nothing'],
         	['cus_id'=>'3', 'food_id'=>'2', 'quantity'=>'2', 'note'=>'nothing'],
         	['cus_id'=>'4', 'food_id'=>'3', 'quantity'=>'2', 'note'=>'nothing'],
         	['cus_id'=>'5', 'food_id'=>'2', 'quantity'=>'3', 'note'=>'nothing'],
         	
        ]);  
    }
}
