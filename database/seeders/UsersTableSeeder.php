<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            "name" => "Luca Zonneveld",
            "email" => "lucazon2003@gmail.com",
            "password" => bcrypt("P1ndak@@s"),
            "role" => "owner",
        ]);

        DB::table('users')->insert([
            "name" => "Jack Sparrow",
            "email" => "jacksparrow@gmail.com",
            "password" => bcrypt("Rum"),
            'pics' => '/media/Users/jack_sparrow.jpg',
        ]);
    }
}
