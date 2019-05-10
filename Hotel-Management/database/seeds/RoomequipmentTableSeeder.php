<?php

use Illuminate\Database\Seeder;

class RoomequipmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('room_equipments')->insert ([
            ['room_id'=>'1', 'equipment_id'=>'1'],
            ['room_id'=>'1', 'equipment_id'=>'2'],
            ['room_id'=>'1', 'equipment_id'=>'3'],
            ['room_id'=>'2', 'equipment_id'=>'1'],
            ['room_id'=>'2', 'equipment_id'=>'2'],
            ['room_id'=>'2', 'equipment_id'=>'5'],
            ['room_id'=>'2', 'equipment_id'=>'6'],
            ['room_id'=>'3', 'equipment_id'=>'1'],
            ['room_id'=>'3',  'equipment_id'=>'6'],
            ['room_id'=>'4', 'equipment_id'=>'4'],
            ['room_id'=>'5', 'equipment_id'=>'1'],
            ['room_id'=>'5', 'equipment_id'=>'3'],
            ['room_id'=>'5', 'equipment_id'=>'4'],
            ['room_id'=>'5', 'equipment_id'=>'5'],
            ['room_id'=>'5', 'equipment_id'=>'6'],
            ['room_id'=>'6',  'equipment_id'=>'4'],
            ['room_id'=>'7', 'equipment_id'=>'2'],
            ['room_id'=>'7', 'equipment_id'=>'5'],
            ['room_id'=>'8', 'equipment_id'=>'5'],
            ['room_id'=>'9', 'equipment_id'=>'3'],
            ['room_id'=>'9', 'equipment_id'=>'5'],
            ['room_id'=>'10', 'equipment_id'=>'1'],
            ['room_id'=>'10', 'equipment_id'=>'2'],
            ['room_id'=>'10', 'equipment_id'=>'4'],
            ['room_id'=>'10', 'equipment_id'=>'6'],
                      
        ]);
    }
}
