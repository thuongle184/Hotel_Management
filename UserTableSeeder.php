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
       DB::table('users')->insert([
         	['username'=>'tuan', 'email'=>'tuan.nguyendev@gmail.com', 'password'=>'tuannguyen', 'role'=>'customer'],

         	['username'=>'Hung', 'email'=>'HungTrandev@gmail.com', 'password'=>'hungtran', 'role'=>'customer'],

         	['username'=>'Tao', 'email'=>'Taoho@gmail.com',
                'password'=>'Taoho', 'role'=>'customer'],

         	['username'=>'Yorn', 'email'=>'Yorn113@gmail.com','password'=>'Yorn113', 'role'=>'customer'],

         	['username'=>'Mine', 'email'=>'Mine037@gmail.com','password'=>'Mine037', 'role'=>'customer'],

            ['username'=>'Kiet', 'email'=>'kietthi@gmail.com','password'=>'kietkiet', 'role'=>'cashier'],

            ['username'=>'Thuong', 'email'=>'thuongle@gmail.com', 'password'=>'thuongle', 'role'=>'cashier']
        ]);  
    }
}
