<?php

use Illuminate\Database\Seeder;

class EquipmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipment')->insert ([
            ['label'=> 'Air Conditioner'],
            ['label'=> 'Wifi'],
            ['label'=> 'Karaoke'],
            ['label'=> 'Tivi'],
            ['label'=> 'Telephone'],
            ['label'=> 'Liter Kettel'],
                      
        ]);
    }
}
