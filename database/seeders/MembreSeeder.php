<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MembreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('membres')->insert([
            [
                "nom"=>"Charlotte",
                "age"=>24,
                "image"=>"Charlotte.jpg",
                "genre_id"=> 2,
                "created_at"=>now(),
            ],
        ]);
    }
}
