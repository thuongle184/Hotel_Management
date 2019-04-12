<?php

use Illuminate\Database\Seeder;

class CusTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customertypes')->insert([
            ['type'=>'Personally', 'isVip'=>'no', 'description'=>'New customers, can receive discounts promotionally'],
            
            ['type'=>'Family', 'isVip'=>'no', 'description'=>'New customers, can receive discounts promotionally'],

            ['type'=>'Company', 'isVip'=>'yes', 'description'=>'Regular customers have relationships with hotels, receive VIP rooms and receive additional promotions']
           
        ]);
    }
}
