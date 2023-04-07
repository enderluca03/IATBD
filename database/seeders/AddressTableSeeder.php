<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class AddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('address')->insert([
            'address' => 'Jedi Temple',
            'town' => 'Coruscant',
            'owner' => 1,
        ]);
    }
}
