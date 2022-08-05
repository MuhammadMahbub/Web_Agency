<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Button;
use Illuminate\Database\Seeder;

class ButtonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Button::create([
            'process_btn_text' => 'Get Start',
            'process_btn_url' => '',
            'about_btn_text' => 'Get Start',
            'about_btn_url' => '',
            'buy_btn_text' => 'Get Start',
            'buy_btn_url' => '',
            'created_at' => Carbon::now(),
        ]);
    }
}
