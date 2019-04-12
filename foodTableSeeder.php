<?php

use Illuminate\Database\Seeder;

class foodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('foods')->insert([
            ['name'=>'Meat stew', 'foodType_id'=>'1', 'image'=>'food-1.jpg', 'description'=>'Casserole dish with salad','status'=>'Not empty'],
            ['name'=>'Full meal', 'foodType_id'=>'1', 'image'=>'food-2.jpg', 'description'=>'full meal with all main dishes','status'=>'Not empty'],
            ['name'=>'Spaghetti with beef', 'foodType_id'=>'1', 'image'=>'food-3.jpg', 'description'=>'Rich and meaty spaghetti sauce are very delicious and ready in just over an hour. Serve over any variety of hot cooked pasta.','status'=>'Empty'],
            ['name'=>'Orange juice', 'foodType_id'=>'2', 'image'=>'drink-1.jpg', 'description'=>'Orange juice is a wonderful dessert after eating, very good for health','status'=>'Not empty'],
            ['name'=>'Strawberry juice', 'foodType_id'=>'2', 'image'=>'drink-2.jpg', 'description'=>'Strawberry juice is good for stomach, good for eye, is a pretty good drink after a meal','status'=>'Not Empty'],
            ['name'=>'Lemonade', 'foodType_id'=>'3', 'image'=>'drink-3.jpg', 'description'=>'Lemonade help for body heat dissipation, energy supplement and calcium','status'=>'empty']
              
        ]);
    }
}
