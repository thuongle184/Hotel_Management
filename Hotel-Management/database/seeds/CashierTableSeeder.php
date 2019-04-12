<?php

use Illuminate\Database\Seeder;

class CashierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cashiers')->insert([
         	['name'=>'Kiet', 'account_id'=>'6', 'idCard/passport'
         		=>'152486945'],
         	['name'=>'Thuong', 'account_id'=>'7', 'idCard/passport'=>'123658794'],

        ]);   
    }
}
