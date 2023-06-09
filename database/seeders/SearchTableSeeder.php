<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class SearchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('search')->insert([
            'owner' => 1,
            'animal' => 1,
            'from' => '2023-06-30 12:50:00',
            'to' => '2023-09-16 21:00:00',
            'payment' => 69.00
        ]);
    }
}
