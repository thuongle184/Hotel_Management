<?php

use Illuminate\Database\Seeder;

class SlideTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('slides')->insert([
         	['image'=>'slide-1.jpg', 'title'=>'Hotel 1'],
         	['image'=>'slide-2.jpg', 'title'=>'Hotel 2'],
         	['image'=>'slide-3.jpg', 'title'=>'Hotel 3'],
         	['image'=>'slide-4.jpg', 'title'=>'Hotel 4'],
         	['image'=>'slide-5.jpg', 'title'=>'Hotel 5'],
        ]);  
    }
}
