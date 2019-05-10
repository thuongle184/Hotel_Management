<?php

use Illuminate\Database\Seeder;

class DishtypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dish_types')->insert ([
            ['label'=> 'Drinks'],
            ['label'=> 'Meals'],
            ['label'=> 'Dessert'],
            ['label'=> 'Appetizer']          
        ]);
    }
}
