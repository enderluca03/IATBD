<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            "firstname" => "Luca",
            "lastname" => "Zonneveld",
            "username" => "enderluca03",
            "email" => "lucazon2003@gmail.com",
            "password" => bcrypt("P1ndak@@s"),
            "role" => "owner",
        ]);
        DB::table('users')->insert([
            "firstname" => "Jack",
            "lastname" => "Sparrow",
            "username" => "Captain_Jack",
            "email" => "jacksparrow@gmail.com",
            "password" => bcrypt("Rum"),
            'media' => '/media/Users/jack_sparrow.jpg',
        ]);
    }
}
