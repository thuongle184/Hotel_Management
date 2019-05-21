<?php

use Illuminate\Database\Seeder;

class BookingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bookings')->insert ([
            ['booking_type_id'=>'2', 'user_id'=>'1', 'room_id'=>'1', 'entry_date'=>'2019/05/11', 'exit_date'=>'2019/05/28', 'is_paid'=>'0', 'booking_purpose_id'=>'2'],
            ['booking_type_id'=>'1', 'user_id'=>'2', 'room_id'=>'2', 'entry_date'=>'2019/05/14', 'exit_date'=>'2019/06/01', 'is_paid'=>'0', 'booking_purpose_id'=>'1'],
            ['booking_type_id'=>'3', 'user_id'=>'3', 'room_id'=>'3', 'entry_date'=>'2019/05/16', 'exit_date'=>'2019/05/17', 'is_paid'=>'0', 'booking_purpose_id'=>'1'],
            ['booking_type_id'=>'4', 'user_id'=>'4', 'room_id'=>'5', 'entry_date'=>'2019/05/24', 'exit_date'=>'2019/06/20', 'is_paid'=>'0', 'booking_purpose_id'=>'3']
                              
        ]);
    }
}
