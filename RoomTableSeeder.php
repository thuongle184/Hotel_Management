<?php

use Illuminate\Database\Seeder;

class RoomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
         	['number'=>'1', 'image'=>'roomVIP-1.jpg', 'beds'=>'3', 'roomtype_id'=>'1'],
         	['number'=>'2', 'image'=>'roomVIP-2.jpg', 'beds'=>'3', 'roomtype_id'=>'1'],
         	['number'=>'3', 'image'=>'roomVIP-3.jpg', 'beds'=>'3', 'roomtype_id'=>'1'],
         	['number'=>'4', 'image'=>'roomGeneral-1.jpg', 'beds'=>'2', 'roomtype_id'=>'2'],
         	['number'=>'5', 'image'=>'roomGeneral-2.jpg', 'beds'=>'2', 'roomtype_id'=>'2'],
         	['number'=>'6', 'image'=>'roomGeneral-3.jpg', 'beds'=>'2', 'roomtype_id'=>'2'],
         	['number'=>'7', 'image'=>'roomFamily-1.jpg', 'beds'=>'1', 'roomtype_id'=>'2'],
         	['number'=>'8', 'image'=>'roomPresident-1.jpg', 'beds'=>'1', 'roomtype_id'=>'3']

        ]); 
    }
}
