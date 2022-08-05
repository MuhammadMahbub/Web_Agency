<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Review;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Review::create([
            'company_name' => 'Eye Insurance',
            'name' => 'merGeorge M. Batyketing',
            'comment' => 'I needed more leads for my services. Pay-per-click, banners of maybe even broschures. They made an analysis of my existing site. It occurred that my webdite is banned with Google, and I never knew about that!',
            'image' => 'review1.jpg',
            'created_at' => Carbon::now(),
        ]);

        Review::create([
            'company_name' => 'Rajiur Rahman',
            'name' => 'merGeorge M. Batyketing',
            'comment' => 'I needed more leads for my services. Pay-per-click, banners of maybe even broschures. They made an analysis of my existing site. It occurred that my webdite is banned with Google, and I never knew about that!',
            'image' => 'review2.jpg',
            'created_at' => Carbon::now(),
        ]);

        Review::create([
            'company_name' => 'Tareq Rahman',
            'name' => 'merGeorge M. Batyketing',
            'comment' => 'I needed more leads for my services. Pay-per-click, banners of maybe even broschures. They made an analysis of my existing site. It occurred that my webdite is banned with Google, and I never knew about that!',
            'image' => 'review3.jpg',
            'created_at' => Carbon::now(),
        ]);

        Review::create([
            'company_name' => 'Mahbub Rahman',
            'name' => 'merGeorge M. Batyketing',
            'comment' => 'I needed more leads for my services. Pay-per-click, banners of maybe even broschures. They made an analysis of my existing site. It occurred that my webdite is banned with Google, and I never knew about that!',
            'image' => 'review4.jpg',
            'created_at' => Carbon::now(),
        ]);
    }
}
