<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            [
                "image_member" => "1.jpg",
                "name_member" => "Christine Williams",
                "job_member" => "Project Manager",
                "created_at" => now(),
            ],
            [
                "image_member" => "2.jpg",
                "name_member" => "Christine Williams",
                "job_member" => "",
                "created_at" => now(),
            ],
            [
                "image_member" => "3.jpg",
                "name_member" => "Christine Williams",
                "job_member" => "Project Manager",
                "created_at" => now(),
            ],
        ]);
    }
}
