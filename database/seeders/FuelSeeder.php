<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FuelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $fuels = ["Benzin", 'Dízel', 'Elektromos'];
        for ($i=0; $i < count($fuels); $i++) { 
            DB::table('fuel_types')->insert([
                'id' => $i,
                'type' => $fuels[$i],
            ]);
        }

    }
}
