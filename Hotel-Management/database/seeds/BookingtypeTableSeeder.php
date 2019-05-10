<?php

use Illuminate\Database\Seeder;

class BookingtypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('booking_types')->insert ([
        	['label'=> 'Online' , 'online_plateform_id'=> '1'],
            ['label'=> 'Online' , 'online_plateform_id'=> '2'],
            ['label'=> 'Online' , 'online_plateform_id'=> '3'],
            ['label'=> 'Online' , 'online_plateform_id'=> '4']//,
            // ['label'=> 'Phone Call' , 'online_plateform_id'=> ''],
            // ['label'=> 'Email' , 'online_plateform_id'=> ''],
            // ['label'=> 'Directly' , 'online_plateform_id'=> ''],
            
            ]);
    }
}
