<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoomsizeTableSeeder::class);
        $this->call(RoomTableSeeder::class);
        $this->call(EquipmentTableSeeder::class);
        $this->call(RoomequipmentTableSeeder::class);
        $this->call(UsertypeTableSeeder::class);
        $this->call(CountryTableSeeder::class);
        $this->call(IdentificationtypeTableSeeder::class);
        $this->call(TitleTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(OnlplateformTableSeeder::class);
        $this->call(BookingtypeTableSeeder::class);
        $this->call(BookingpurposeTableSeeder::class);
        $this->call(BookingTableSeeder::class);
        $this->call(VIPcardTableSeeder::class);
        $this->call(CompanyTableSeeder::class);
        $this->call(DishtypeTableSeeder::class);
        $this->call(DishTableSeeder::class);
        $this->call(BillTableSeeder::class);
        $this->call(OrderTableSeeder::class);
        
    }
}
