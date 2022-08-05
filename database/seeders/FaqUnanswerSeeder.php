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
            'title' => 'Any Unanswered Question?',
            'button_text' => 'GET STARTED',
            'button_url' => '',
            'background_img' => 'default_faq_bottom_img.jpg',
        ]);
    }
}
