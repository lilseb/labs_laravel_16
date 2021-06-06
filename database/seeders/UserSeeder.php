<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                "name" => "admin",
                "poste_id" => 1,
                "role_id" => 1,
                "image" => "empty_profile.jpg",
                "email" => "admin@email.com",
                "password" => Hash::make('admin123'),
                "created_at" => now(),
            ],
            [
                "name" => "webmaster ",
                "poste_id" => 2,
                "role_id" => 2,
                "image" => "empty_profile.jpg",
                "email" => "webmaster@email.com",
                "password" => Hash::make ('webmaster123'),
                "created_at" => now(),
            ],
            [
                "name"          =>  "redacteur",
                "poste_id"      =>  3,
                "role_id"       =>  3,
                "image"         =>  "empty_profile.jpg",
                "email"         =>  "redacteur@email.com",
                "password"      =>  Hash::make('redacteur123'),
                "created_at"    =>  now(),
            ],
        ]);
    }
}
