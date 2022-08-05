<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Banner;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Banner::create([
            'image' => 'default_banner1.jpg',
            'title_one' => 'WELCOME TO',
            'title_two' => 'IT AGENCY',
            'title_three' => 'Marketing & Branding',
            'button_text' => 'GET STARTED',
            'button_url' => '',
            'created_at' => Carbon::now(),
        ]);

        Banner::create([
            'image' => 'default_banner2.jpg',
            'title_one' => 'Online',
            'title_two' => 'MARKETING',
            'title_three' => 'SOLUTION',
            'button_text' => 'GET STARTED',
            'button_url' => '',
            'created_at' => Carbon::now(),
        ]);


    }
}
