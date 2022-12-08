<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("permissions")->insert([
            ["name"=> "Ajouter un client"],
            ["name"=> "Consulter un client"],
            ["name"=> "Editer un client"],

            ["name"=> "Ajouter une location"],
            ["name"=> "Consulter une location"],
            ["name"=> "Editer une location"],

            ["name"=> "Ajouter un article"],
            ["name"=> "Consulter un article"],
            ["name"=> "Editer un article"]
        ]);
    }
}
