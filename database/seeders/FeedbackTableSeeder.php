<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class FeedbackTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('feedback')->insert([
            'animal' => 1,
            'feedback' => "Hot",
            'rate' => 5,
        ]);
    }
}
