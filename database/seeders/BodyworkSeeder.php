<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BodyworkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bodyworks = ["Szedán / ferdehátú", 'Kombi', 'Csukott áruszállító', 'Nyitott (ponyvás) teherautó', "Személyszállító kisbusz"];
        for ($i=1; $i < count($bodyworks) + 1; $i++) { 
            DB::table('bodywork_types')->insert([
                'id' => $i,
                'type' => $bodyworks[$i - 1],
            ]);
        }
    }
}
