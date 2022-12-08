<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DureeLocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("duree_locations")->insert([
            ["libelle"=>"Journée", "valeur_en_heure"=>24],
            ["libelle"=>"Demi-journée", "valeur_en_heure"=>12]
        ]);
    }
}
