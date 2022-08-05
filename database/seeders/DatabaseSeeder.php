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
            AboutBackImgSeeder::class,
            AboutHeaderSeeder::class,
            AboutUsSeeder::class,
            BannerSeeder::class,
            ColorSettingsSeeder::class,
            SocialUrlSeeder::class,
            GeneralSettingsSeeder::class,
            SubscriberSeeder::class,
            ContactSeeder::class,
            MstretegySeeder::class,
            BuyNowSeeder::class,
            ContactusSeeder::class,
            UserSeeder::class,
            FaqTopSeeder::class,
            FaqUnanswerSeeder::class,
            CompanySeeder::class,
            StartProjectSeeder::class,
            ServiceSeeder::class,
            ProcessSeeder::class,
            GalleryNameSeeder::class,
            GallerySeeder::class,
            BlogCategorySeeder::class,
            BlogSeeder::class,
            TeamSeeder::class,
            TestimonialSeeder::class,
            FaqSeeder::class,
            FeatureSeeder::class,
            ReviewSeeder::class,
            TitleSettingSeeder::class,
            ButtonSeeder::class,
        ]);
    }
}
