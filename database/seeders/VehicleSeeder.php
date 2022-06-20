<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehicles')->insert([
            'id' => 1,
            'plate' => 'NRD-692',
            'year' => 2016,
            'fuel_type_id' => 2,
            'doors' => 5,
            'seats' => 5,
            'brand' => 'Skoda',
            'model' => 'Octavia Style',
            'bodywork_type_id' => 1,
            'gearbox_type_id' => 1,
            'outer_color' => 'Fekete metál',
            'inner_color' => 'Fekete',
            'motor' => '1.6 CRTDI 4x4 110Le',
            'description' => '',
            'vehicle_type_id' => 1,
        ]);
        DB::table('vehicles')->insert([
            'id' => 2,
            'plate' => 'NTA-626',
            'year' => 2016,
            'fuel_type_id' => 2,
            'doors' => 5,
            'seats' => 5,
            'brand' => 'Skoda',
            'model' => 'Octavia Combi Style',
            'bodywork_type_id' => 2,
            'gearbox_type_id' => 1,
            'outer_color' => 'Fekete metál',
            'inner_color' => 'Bézs',
            'motor' => '1.6 CRTDI 4x4 110Le',
            'description' => '',
            'vehicle_type_id' => 1,
        ]);
        DB::table('vehicles')->insert([
            'id' => 3,
            'plate' => 'NTA-607',
            'year' => 2016,
            'fuel_type_id' => 2,
            'doors' => 5,
            'seats' => 5,
            'brand' => 'Skoda',
            'model' => 'Octavia Combi Style',
            'bodywork_type_id' => 2,
            'gearbox_type_id' => 1,
            'outer_color' => 'Fekete metál',
            'inner_color' => '',
            'motor' => '1.6 CRTDI 4x4 110Le',
            'description' => '',
            'vehicle_type_id' => 1,
        ]);
        DB::table('vehicles')->insert([
            'id' => 4,
            'plate' => 'NXP-867',
            'year' => 2016,
            'fuel_type_id' => 2,
            'doors' => 5,
            'seats' => 5,
            'brand' => 'Skoda',
            'model' => 'Octavia Combi Style',
            'bodywork_type_id' => 2,
            'gearbox_type_id' => 1,
            'outer_color' => 'Fekete metál',
            'inner_color' => '',
            'motor' => '2.0 CRTDI 4x4 150Le',
            'description' => '',
            'vehicle_type_id' => 1,
        ]);
        DB::table('vehicles')->insert([
            'id' => 5,
            'plate' => 'SHS-776',
            'year' => 2020,
            'fuel_type_id' => 2,
            'doors' => 2,
            'seats' => 3,
            'brand' => 'Renault',
            'model' => 'Master',
            'bodywork_type_id' => 3,
            'gearbox_type_id' => 1,
            'outer_color' => 'Fehér',
            'inner_color' => 'Fekete szövet',
            'motor' => '120 Kw/2299cm3',
            'description' => '',
            'vehicle_type_id' => 3,
        ]);
        DB::table('vehicles')->insert([
            'id' => 6,
            'plate' => 'SMD-613',
            'year' => 2020,
            'fuel_type_id' => 2,
            'doors' => 2,
            'seats' => 3,
            'brand' => 'Renault',
            'model' => 'Master',
            'bodywork_type_id' => 3,
            'gearbox_type_id' => 1,
            'outer_color' => 'Fehér',
            'inner_color' => 'Fekete szövet',
            'motor' => '120 Kw/2299cm3',
            'description' => '',
            'vehicle_type_id' => 3,
        ]);
        DB::table('vehicles')->insert([
            'id' => 7,
            'plate' => 'NBC-934',
            'year' => 0,
            'fuel_type_id' => 2,
            'doors' => 0,
            'seats' => 9,
            'brand' => 'Volkswagen',
            'model' => 'Crafter',
            'bodywork_type_id' => 5,
            'gearbox_type_id' => 1,
            'outer_color' => 'Metál szürke',
            'inner_color' => 'Fekete szövet',
            'motor' => '',
            'description' => '',
            'vehicle_type_id' => 2,
        ]);
        DB::table('vehicles')->insert([
            'id' => 8,
            'plate' => 'NBC-935',
            'year' => 0,
            'fuel_type_id' => 2,
            'doors' => 0,
            'seats' => 9,
            'brand' => 'Volkswagen',
            'model' => 'Crafter',
            'bodywork_type_id' => 5,
            'gearbox_type_id' => 1,
            'outer_color' => 'Metál szürke',
            'inner_color' => 'Fekete szövet',
            'motor' => '',
            'description' => '',
            'vehicle_type_id' => 2,
        ]);
        DB::table('vehicles')->insert([
            'id' => 9,
            'plate' => 'PSU-979',
            'year' => 0,
            'fuel_type_id' => 2,
            'doors' => 2,
            'seats' => 9,
            'brand' => 'Iveco',
            'model' => 'Daily',
            'bodywork_type_id' => 4,
            'gearbox_type_id' => 1,
            'outer_color' => 'Fehér',
            'inner_color' => 'Fekete szövet',
            'motor' => '3.0 HTP',
            'description' => '',
            'vehicle_type_id' => 3,
        ]);
    }
}
