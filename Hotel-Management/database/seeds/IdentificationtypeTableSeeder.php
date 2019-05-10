<?php

use Illuminate\Database\Seeder;

class IdentificationtypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('identification_types')->insert ([
            ['label'=> 'Passport'],
            ['label'=> 'Identity card'],
        ]);
    }
}
