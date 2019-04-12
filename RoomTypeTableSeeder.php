<?php

use Illuminate\Database\Seeder;

class RoomTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roomtypes')->insert([
         	['quantity'=>'5', 'isSmoking'=>'no', 'price'=>'4000000', 'description'=>'VIP room with full room, spacious, comfortable wifi, 2 large beds, with free fast food and 3 drink'],
         	['quantity'=>'10', 'isSmoking'=>'yes', 'price'=>'3000000', 'description'=>'Normal with room full, spacious, comfortable wifi, 2 large double bed, accompanied by two free soft drinks bottles'],

         	['quantity'=>'10', 'isSmoking'=>'yes', 'price'=>'2000000', 'description'=>'Cheap room with 1 large double bed, full material'],
            
        ]); 
    }
}
