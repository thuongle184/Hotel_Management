<?php

use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            ['firstname'=>'Tuan', 'lastname'=>'Nguyen Huu', 'account_id'=>'1', 'DOB'=>'1999/10/12', 'gender'=>'Male', 'phone'=>'(+84)394815663', 'address'=>'Da Nang', 'nationality'=>'Viet Nam', 'idCard/passport'=>'253156879', 'cusType_id'=>'1', 'company'=>'no', 'note'=>'I go to work'],
            ['firstname'=>'Hung', 'lastname'=>'Tran Ngoc ', 'account_id'=>'2', 'DOB'=>'1999/10/25', 'gender'=>'Male', 'phone'=>'(+84)349875160', 'address'=>'Quang Tri', 'nationality'=>'Viet Nam', 'idCard/passport'=>'254698756', 'cusType_id'=>'2', 'company'=>'No', 'note'=>'I go to travel'],
            ['firstname'=>'Tao', 'lastname'=>'Ho Van', 'account_id'=>'3', 'DOB'=>'1998/04/14', 'gender'=>'Female', 'phone'=>'(+84)358974517', 'address'=>'Quang Tri', 'nationality'=>'Viet Nam', 'idCard/passport'=>'8974515214', 'cusType_id'=>'2', 'company'=>'No', 'note'=>'No'],
            ['firstname'=>'Yorn', 'lastname'=>'Michale', 'account_id'=>'4', 'DOB'=>'1995/02/16', 'gender'=>'Male', 'phone'=>'(+33)394541001', 'address'=>'Marseille ', 'nationality'=>'France', 'idCard/passport'=>'PFRA14CV23142', 'cusType_id'=>'3', 'company'=>'AXA Group', 'note'=>'Old and familiar customer'],
            ['firstname'=>'Mine', 'lastname'=>'Hames', 'account_id'=>'5', 'DOB'=>'1985/12/12', 'gender'=>'Male', 'phone'=>'(+1)358417742', 'address'=>'New York City', 'nationality'=>'American', 'idCard/passport'=>'PUSA437769506', 'cusType_id'=>'1', 'company'=>'No', 'note'=>'No']
           
        ]);
    }
}
