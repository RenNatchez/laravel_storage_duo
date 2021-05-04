<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            [
                "type"=>"homme",
                "created_at"=>now(),
            ],
            [
                "type"=>"femme",
                "created_at"=>now(),
            ],
            [
                "type"=>"autres",
                "created_at"=>now(),
            ],
        ]);
    }
}
