<?php

namespace Database\Seeders;

use App\Models\ColorSetting;
use Illuminate\Database\Seeder;

class ColorSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ColorSetting::create([
            'theme_color'                  => '#FF5082',
            'theme_menu_text_color'             => '#F0F0F0',   
            'theme_header_background'      => '#242C37',
            'theme_footer_background'      => '#FF4A7D',
        ]);
    }
}
