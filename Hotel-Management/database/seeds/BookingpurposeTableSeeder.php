<?php

use Illuminate\Database\Seeder;

class BookingpurposeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('booking_purposes')->insert ([
            ['label'=> 'private'],
            ['label'=> 'public'],
            ['label'=> 'protected'],
            
        ]);
    }
}
