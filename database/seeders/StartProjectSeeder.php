<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\StartProject;

class StartProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StartProject::create([
            'title' => 'Lets Get Started Your Project',
            'meta_title' => 'We’ll help to achieve your goals and to grow business',
            'button_text' => 'Lets Talk',
            'button_url' => '',
        ]);
    }
}
