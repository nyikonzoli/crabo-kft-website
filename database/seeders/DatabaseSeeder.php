<?php

namespace Database\Seeders;

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
            UserSeeder::class,
            BodyworkSeeder::class,
            FuelSeeder::class,
            GearboxSeeder::class,
            VehicleSeeder::class,
            VehicleTypeSeeder::class,
            EquipmentSeeder::class,
            CargoSpaceSeeder::class,
        ]);
    }
}
