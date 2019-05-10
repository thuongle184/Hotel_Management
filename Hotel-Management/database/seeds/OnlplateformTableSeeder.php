<?php

use Illuminate\Database\Seeder;

class OnlplateformTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('online_plateforms')->insert ([
        	['label'=> 'booking.com'],
            ['label'=> 'tripadvisor.com'],
            ['label'=> 'agola.com'],
            ['label'=> 'tourist.com'],
            ['label'=> 'tuanweb.com'],
            ['label'=> 'cookpad.com']
          
            ]);

    }
}
