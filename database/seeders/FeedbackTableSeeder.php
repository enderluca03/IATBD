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
            'address' => 'Jedi Temple',
            'feedback' => "Not a lot of Jedi",
            'rate' => 5,
        ]);
    }
}
