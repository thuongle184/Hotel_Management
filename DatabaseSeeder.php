<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
        UserTableSeeder::class,
        RoomTypeTableSeeder::class,
        RoomTableSeeder::class,
        CusTypeTableSeeder::class,
        CustomerTableSeeder::class,
        foodTypeTableSeeder::class,
        foodTableSeeder::class,
        ReservationTableSeeder::class,
        OrderTableSeeder::class,
        SlideTableSeeder::class,
        CashierTableSeeder::class,
        BillTableSeeder::class,    
        BillFoodOrdersTableSeeder::class
    ]);
    }
}
