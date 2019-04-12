<?php

use Illuminate\Database\Seeder;

class ReservationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reservations')->insert([
         	['cus_id'=>'1', 'room_id'=>'3', 'checkIn_date'=>'2019/04/12', 'checkOut_date'=>'2019/04/15'],
         	['cus_id'=>'2', 'room_id'=>'2', 'checkIn_date'=>'2019/04/12', 'checkOut_date'=>'2019/04/15'],
         	['cus_id'=>'3', 'room_id'=>'2', 'checkIn_date'=>'2019/04/13', 'checkOut_date'=>'2019/04/14'],
         	['cus_id'=>'4', 'room_id'=>'1', 'checkIn_date'=>'
         		2019/04/20', 'checkOut_date'=>'2019/05/01'],
         	['cus_id'=>'5', 'room_id'=>'1', 'checkIn_date'=>'
         		2019/04/20', 'checkOut_date'=>'2019/05/20'],
        ]);  
    }
}
