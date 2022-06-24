<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CargoSpaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cargo_spaces')->insert([
            'height' => 210,
            'width' => 200,
            'length' => 360,
            'vehicle_id' => 5,
        ]);
        DB::table('cargo_spaces')->insert([
            'height' => 210,
            'width' => 200,
            'length' => 280,
            'vehicle_id' => 6,
        ]);
        DB::table('cargo_spaces')->insert([
            'height' => 230,
            'width' => 220,
            'length' => 400,
            'vehicle_id' => 9,
        ]);
    }
}
