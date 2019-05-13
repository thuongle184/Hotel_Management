<?php

use Illuminate\Database\Seeder;
 
use Illuminate\Database\Eloquent\Model;
class RoomsizeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('room_sizes')->insert ([
            ['label'=> 'Double'],
            ['label'=> 'Single'],
            ['label'=> 'Triple'],
            ['label'=> 'Quad'],
            ['label'=> 'Queen'],
            ['label'=> 'King'],
                      
        ]);
    }
}
