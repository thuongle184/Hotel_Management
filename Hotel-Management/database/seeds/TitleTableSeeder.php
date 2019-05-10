<?php

use Illuminate\Database\Seeder;

class TitleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('titles')->insert ([
            ['label'=> 'Mr.'],
            ['label'=> 'Ms.'],
            ['label'=> 'Mrs.'],
            ['label'=> 'Miss'],
            
        ]);
    }
}
