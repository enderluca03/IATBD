<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class AnimalSpeciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $animal_species_array = ["Dog", "Cat", "Fish", "Bird", "Guinea Pig"];

        foreach($animal_species_array as $species){
            DB::table('animal_species')->insert([
                'species' => $species
            ]);
        }
    }
}
