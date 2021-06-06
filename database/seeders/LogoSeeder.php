<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('logos')->insert([
            [
                "image_logo"    =>   "big-logo.png",
                "titre_logo"    =>   "Get your freebie template now!",
                "created_at"    =>  now(),
            ],
        ]);

    }
}
