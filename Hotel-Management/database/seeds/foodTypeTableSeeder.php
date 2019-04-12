<?php

use Illuminate\Database\Seeder;

class foodTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('foodtypes')->insert([
         	['type'=>'Main dishes', 'quantity'=>'30', 'price'=>'200000', 'oldPrice'=>'300000','note'=>'The main menu with many dishes is processed in different ways corresponding to the right price'],

            ['type'=>'Desserts', 'quantity'=>'10', 'price'=>'100000', 'oldPrice'=>'200000','note'=>'Dessert is a snack used at the end of the main meal. This dish includes sweet foods, drink, ect.'],
           
            ['type'=>'Other', 'quantity'=>'12', 'price'=>'30000', 'oldPrice'=>'30000','note'=>'Other food can include snacks outside and fast food']  
        ]);
    }
}
