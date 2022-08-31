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
            'title' => 'Commençons votre projet',
            'meta_title' => 'Nous vous aiderons à atteindre vos objectifs et à développer votre activité.',
            'button_text' => 'Parlons-en',
            'button_url' => '',
        ]);
    }
}
