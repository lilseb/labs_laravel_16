<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            RoleSeeder::class,
            TestimonialSeeder::class,
            TeamSeeder::class,
            ServiceSeeder::class,
            PromotionSeeder::class,
            PosteSeeder::class,
            LogoSeeder::class,
            HomeTitleSeeder::class,
            FooterSeeder::class,
            FeatureServiceSeeder::class,
            DeviceServiceSeeder::class,
            ContactSectionSeeder::class,
            CarouselImgSeeder::class,
            CardServiceSeeder::class,
            CardAboutSectionSeeder::class,
            AboutSectionSeeder::class,
            UserSeeder::class,
        ]);
    }
}
