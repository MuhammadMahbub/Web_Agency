<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FaqUnanswerQ;

class FaqUnanswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FaqUnanswerQ::create([
            'title' => 'Une question sans réponse ?',
            'button_text' => 'COMMENCER',
            'button_url' => '',
            'background_img' => 'default_faq_bottom_img.jpg',
        ]);
    }
}
