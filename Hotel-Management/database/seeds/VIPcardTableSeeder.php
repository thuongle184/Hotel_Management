<?php

use Illuminate\Database\Seeder;

class VIPcardTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vip_cards')->insert ([
            ['user_id'=> '1', 'point'=> '1214'],
            ['user_id'=> '2', 'point'=> '564'],
            ['user_id'=> '3', 'point'=> '33'],
            ['user_id'=> '4', 'point'=> '673'],
            
                      
        ]);
    }
}
