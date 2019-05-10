<?php

use Illuminate\Database\Seeder;

class DishTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dishes')->insert ([
            ['dish_type_id'=>'2', 'name'=>'Fried Fish', 'image'=>'food-1', 'price'=>'124976', 'description'=>'Hot, Oil', 'is_available'=>'yes'],

            ['dish_type_id'=>'2', 'name'=>'Hotpot Chicken', 'image'=>'food-12', 'price'=>'350000', 'description'=>'Hot, Big, 4 people', 'is_available'=>'yes'],

            ['dish_type_id'=>'2', 'name'=>'Smoked Beef', 'image'=>'food-5', 'price'=>'765123', 'description'=>'', 'is_available'=>'yes'],

            ['dish_type_id'=>'1', 'name'=>'Orange Juice', 'image'=>'drink-1', 'price'=>'50000', 'description'=>'A Cup', 'is_available'=>'yes'],

            ['dish_type_id'=>'2', 'name'=>'Red Wine', 'image'=>'drink-9', 'price'=>'1000000', 'description'=>'A Bottle', 'is_available'=>'yes'],

            ['dish_type_id'=>'2', 'name'=>'Fried Fish', 'image'=>'food-1', 'price'=>'124976', 'description'=>'Hot, Oil', 'is_available'=>'yes'],

            ['dish_type_id'=>'3', 'name'=>'Fruit', 'image'=>'food-7', 'price'=>'200000', 'description'=>'A Bowl of fruit: Banana, Kiwi', 'is_available'=>'yes'],

            ['dish_type_id'=>'3', 'name'=>'Plan Cake', 'image'=>'food-6', 'price'=>'30000', 'description'=>'2 cakes for each part', 'is_available'=>'yes'],

            ['dish_type_id'=>'3', 'name'=>'Cheese Cake', 'image'=>'food-14', 'price'=>'50000', 'description'=>'2 cakes for each part', 'is_available'=>'yes']//,

            // ['dish_type_id'=>'4', 'name'=>'Fried Fish', 'image'=>'food-1', 'price'=>'124976', 'description'=>'Hot, Oil', 'is_available'=>'yes'],

            // ['dish_type_id'=>'4', 'name'=>'Fried Fish', 'image'=>'food-1', 'price'=>'124976', 'description'=>'Hot, Oil', 'is_available'=>'yes'],

            // ['dish_type_id'=>'4', 'name'=>'Fried Fish', 'image'=>'food-1', 'price'=>'124976', 'description'=>'Hot, Oil', 'is_available'=>'yes'],
                              
        ]);
    }
}
