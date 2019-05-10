<?php

use Illuminate\Database\Seeder;

class UsertypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_types')->insert ([
            ['label'=> 'Cashier'],
            ['label'=> 'Manager'],
            ['label'=> 'Customer'],
            ['label'=> 'Receptionist'],
            ['label'=> 'Accountant'],
            ['label'=> 'Guard'],
            ['label'=> 'Director'],
                              
        ]);
    }
}
