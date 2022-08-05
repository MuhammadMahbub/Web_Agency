<?php

namespace Database\Seeders;

use App\Models\GeneralSetting;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class GeneralSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GeneralSetting::create([
            'site_logo'              => 'site_logo.png',
            'footer_logo'            => 'footer_logo.png',
            'favicon'                => 'favicon.png',
            'phone'                  => '1-800-123-4567',
            'common_button_text'     => 'Get Started',
            'arrow_icon'             => '<i class="fa fa-angle-up"></i>',
            'copyright'              => '© COPYRIGHT 2022 ALL RIGHTS RESERVED',
            'created_at'             => Carbon::now(),
        ]);
    }
}


