<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GearboxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gearboxes = ["Manuális", 'Automata'];
        for ($i=0; $i < count($gearboxes); $i++) { 
            DB::table('gearbox_types')->insert([
                'id' => $i,
                'type' => $gearboxes[$i],
            ]);
        }
    }
}
