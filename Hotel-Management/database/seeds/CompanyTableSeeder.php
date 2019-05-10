 <?php

use Illuminate\Database\Seeder;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert ([
            ['user_id'=> '1', 'name'=> 'FPT Da Nang'],
            ['user_id'=> '2', 'name'=> 'mgm'],
            ['user_id'=> '3', 'name'=> 'Imagtor'],
            ['user_id'=> '4', 'name'=> 'J.P. Morgan'],
            
                      
        ]);
    }
}
