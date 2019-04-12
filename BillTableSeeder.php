<?php

use Illuminate\Database\Seeder;

class BillTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('bills')->insert([
         	['customer_id'=>'1', 'numsOfFoodOrder'=>'5', 'reservation_id'=>'1', 'cashier_id'=>'1'],
         	['customer_id'=>'2', 'numsOfFoodOrder'=>'1', 'reservation_id'=>'2', 'cashier_id'=>'1'],
         	['customer_id'=>'3', 'numsOfFoodOrder'=>'2', 'reservation_id'=>'3', 'cashier_id'=>'2'],
         	['customer_id'=>'4', 'numsOfFoodOrder'=>'2', 'reservation_id'=>'4', 'cashier_id'=>'2'],
         	['customer_id'=>'5', 'numsOfFoodOrder'=>'3', 'reservation_id'=>'5', 'cashier_id'=>'1']
        ]);   
    }
}
