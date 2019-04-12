<?php

use Illuminate\Database\Seeder;

class BillFoodOrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bill_food_orders')->insert([
            ['bill_id'=>'1', 'foodOrder_id'=>'1'],
            ['bill_id'=>'2', 'foodOrder_id'=>'2'],
            ['bill_id'=>'3', 'foodOrder_id'=>'3'],
            ['bill_id'=>'4', 'foodOrder_id'=>'4'],
            ['bill_id'=>'5', 'foodOrder_id'=>'5'],
        ]);   
    }
}
