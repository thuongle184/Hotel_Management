<?php

use Illuminate\Database\Seeder;

class BillTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bills')->insert ([
            ['user_id'=> '1', 'booking_id'=> '1', 'cashier_id'=> '5'],
            ['user_id'=> '2', 'booking_id'=> '2', 'cashier_id'=> '1'],
            ['user_id'=> '3', 'booking_id'=> '3', 'cashier_id'=> '1'],
            ['user_id'=> '4', 'booking_id'=> '4', 'cashier_id'=> '1'],
            
                      
        ]);
    }
}
