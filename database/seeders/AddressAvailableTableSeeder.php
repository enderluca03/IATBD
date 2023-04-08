<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class AddressAvailableTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('address_available')->insert([
            'address' => 'Jedi Temple',
            'for' => 'Dog'
        ]);

        DB::table('address_available')->insert([
            'address' => 'Zernikedreef',
            'for' => 'Cat'
        ]);
    }
}
