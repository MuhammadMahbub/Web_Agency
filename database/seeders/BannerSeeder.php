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
            'title_one' => 'BIENVENUE',
            'title_two' => 'AGENCE TI',
            'title_three' => 'Marketing et image de marque',
            'button_text' => 'COMMENCER',
            'button_url' => '',
            'created_at' => Carbon::now(),
        ]);

        Banner::create([
            'image' => 'default_banner2.jpg',
            'title_one' => 'En ligne',
            'title_two' => 'MARKETING',
            'title_three' => 'SOLUTION',
            'button_text' => 'COMMENCER',
            'button_url' => '',
            'created_at' => Carbon::now(),
        ]);


    }
}
