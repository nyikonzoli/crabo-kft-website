<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehicleTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = ["Személyautó", "Furgon", "Teherautó", "Elektromos autó"];
        for ($i=0; $i < count($type); $i++) { 
            DB::table('vehicle_types')->insert([
                'id' => $i,
                'type' => $type[$i],
            ]);
        }
    }
}
