<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $equipments = ["Automata klíma", "Tempomat", "Eső és fény érzékelő", "Ködlámpák", "Első, hátsó parkszenzor", "Fűthető ülések", "Könnyüfém felnik"];
        for ($i=1; $i < count($equipments) + 1; $i++) { 
            DB::table('equipments')->insert([
                'id' => $i,
                'type' => $equipments[$i - 1],
            ]);
        }
    }
}
