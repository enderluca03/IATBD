<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class AddressPicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('address_pics')->insert([
            'address' => 'Jedi Temple',
            'pics' => 'jedi_temple.jpg'
        ]);

        DB::table('address_pics')->insert([
            'address' => 'Zernikedreef'
        ]);
    }
}
