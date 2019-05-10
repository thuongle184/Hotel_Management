<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->insert ([['user_type_id'=> '1', 'title_id'=>'1', 'first_name' => 'Alex', 'middle_name'=>'', 'last_name'=>'Nguyen', 'user_name'=>'alex_nguyen', 'DOB'=>'1978/04/18', 'password'=>'alexnguyen12', 'address'=>'101 Lottesci Str.', 'email'=>'alex.nguyen@gmail.com', 'phone'=>'(+84) 123759549', 'country_id'=>'1', 'identification_type_id'=>'2', 'information'=>''],

    		['user_type_id'=> '3', 'title_id'=>'1', 'first_name' => 'John', 'middle_name'=>'', 'last_name'=>'Heven', 'user_name'=>'alex_nguyen', 'DOB'=>'1998/12/12', 'password'=>'helenab65', 'address'=>'Northen Piciaci Str.', 'email'=>'john.heven@gmail.com', 'phone'=>'(+84) 123679549', 'country_id'=>'1', 'identification_type_id'=>'2', 'information'=>''],

    		['user_type_id'=> '3', 'title_id'=>'2', 'first_name' => 'Kiet', 'middle_name'=>'', 'last_name'=>'Alang', 'user_name'=>'kiet.alang', 'DOB'=>'1999/07/12', 'password'=>'kietalang56', 'address'=>'101 Le Huu Trac Str.', 'email'=>'kiet.alang@gmail.com', 'phone'=>'(+84) 123750311', 'country_id'=>'5', 'identification_type_id'=>'2', 'information'=>'Pregnant'],

    		['user_type_id'=> '3', 'title_id'=>'4', 'first_name' => 'Helen', 'middle_name'=>'', 'last_name'=>'Tovado', 'user_name'=>'helenbeauty', 'DOB'=>'1990/04/09', 'password'=>'helenbui90', 'address'=>'01 Noaddress Str.', 'email'=>'helen.bui@gmail.com', 'phone'=>'(+84) 098745221', 'country_id'=>'5', 'identification_type_id'=>'1', 'information'=>'Miss University 2030'],

            ['user_type_id'=> '1', 'title_id'=>'2', 'first_name' => 'Miu', 'middle_name'=>'', 'last_name'=>'Le', 'user_name'=>'miu.le', 'DOB'=>'1988/04/28', 'password'=>'miuleanh', 'address'=>'101 Sakuraci Str.', 'email'=>'miu.le@gmail.com', 'phone'=>'(+84) 987562255', 'country_id'=>'1', 'identification_type_id'=>'2', 'information'=>'Intern'],

            ['user_type_id'=> '3', 'title_id'=>'2', 'first_name' => 'Dan', 'middle_name'=>'Nam', 'last_name'=>'Nguyen', 'user_name'=>'dan.nguyen', 'DOB'=>'1988/04/28', 'password'=>'dannguyen12', 'address'=>'12/43 Haicang Str.', 'email'=>'dan.nguyen@gmail.com', 'phone'=>'(+84) 454435345', 'country_id'=>'6', 'identification_type_id'=>'2', 'information'=>'Blind & Deaf']

        	]);
    }
}
