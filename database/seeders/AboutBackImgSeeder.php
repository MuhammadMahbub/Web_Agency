<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AboutBackImg;
use Carbon\Carbon;

class AboutBackImgSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AboutBackImg::create([
            'name' => 'Letha L. Young',
            'post' => 'Marketer',
            'back_img' => 'about_back_image_background1.jpg',
            'created_at' => Carbon::now(),
        ]);

        AboutBackImg::create([
            'name' => 'Harold D. Cote ',
            'post' => 'Developer',
            'back_img' => 'about_back_image_background2.jpg',
            'created_at' => Carbon::now(),
        ]);

        AboutBackImg::create([
            'name' => 'Letha L. Young',
            'post' => 'Marketer',
            'back_img' => 'about_back_image_background3.jpg',
            'created_at' => Carbon::now(),
        ]);

        AboutBackImg::create([
            'name' => 'Harold D. Cote ',
            'post' => 'Developer',
            'back_img' => 'about_back_image_background4.jpg',
            'created_at' => Carbon::now(),
        ]);
    }
}
