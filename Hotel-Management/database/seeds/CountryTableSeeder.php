<?php

use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert ([
            ['label'=> 'Vietnam'],
            ['label'=> 'US'],
            ['label'=> 'UK'],
            ['label'=> 'Japan'],
            ['label'=> 'Singapore'],
            ['label'=> 'China'],
            ['label'=> 'Korea'], 
            ['label'=> 'Australia'],

        ]);
    }
}
