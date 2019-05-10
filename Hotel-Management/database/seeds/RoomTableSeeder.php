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
        DB::table('rooms')->insert ([
            ['room_size_id'=>'1', 'number'=>'A01', 'is_smoking'=>'yes', 'price'=>'150000', 'is_available'=>'yes', 'beds'=>'2'],
            ['room_size_id'=> '1', 'number'=> 'A02', 'is_smoking'=> 'yes', 'price'=> '150000', 'is_available'=> 'yes', 'beds'=> '2',],
            ['room_size_id'=> '1', 'number'=> 'A03', 'is_smoking'=> 'yes', 'price'=> '150000', 'is_available'=> 'yes', 'beds'=> '2',],
            ['room_size_id'=> '1', 'number'=> 'A04', 'is_smoking'=> 'no', 'price'=> '150000', 'is_available'=> 'yes', 'beds'=> '2',],
            ['room_size_id'=> '2', 'number'=> 'A05', 'is_smoking'=> 'no', 'price'=> '150000', 'is_available'=> 'yes', 'beds'=> '1',],
            ['room_size_id'=> '3', 'number'=> 'B01', 'is_smoking'=> 'no', 'price'=> '185000', 'is_available'=> 'yes', 'beds'=> '3',],
            ['room_size_id'=> '1', 'number'=> 'B02', 'is_smoking'=> 'yes', 'price'=> '185000', 'is_available'=> 'yes', 'beds'=> '2',],
            ['room_size_id'=> '1', 'number'=> 'B03', 'is_smoking'=> 'yes', 'price'=> '185000', 'is_available'=> 'yes', 'beds'=> '2',],
            ['room_size_id'=> '5', 'number'=> 'B04', 'is_smoking'=> 'no', 'price'=> '185000', 'is_available'=> 'yes', 'beds'=> '1',],
            ['room_size_id'=> '5', 'number'=> 'B05', 'is_smoking'=> 'yes', 'price'=> '185000', 'is_available'=> 'yes', 'beds'=> '2',],
                              
        ]);
    }
}
