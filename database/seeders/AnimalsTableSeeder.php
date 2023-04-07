<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class AnimalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('animals')->insert([
            "name" => "Obi-Wan",
            "age" => 66,
            "species" => "Dog",
            "owner" => 1,
            "note" => "Prefers the High Ground"
        ]);
    }
}
