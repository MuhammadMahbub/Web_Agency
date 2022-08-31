<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AboutUs;

class AboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AboutUs::create([
            'title1' => 'Qui sommes-nous ?',
            'description1' => 'We are a team of San Diego web design and development professionals who love partnering with good people and businesses to help them achieve online success',
            'image1' => 'about1.png',

            'title2' => 'Ce que nous faisons',
            'description2' => "Nous sommes une équipe de professionnels de la conception et du développement de sites web de San Diego qui aiment",
            'image2' => 'about2.png',

            'title3' => 'Pourquoi nous sommes',
            'description3' => "Nous sommes une équipe de professionnels de la conception et du développement de sites Web de San Diego qui aiment s'associer à des personnes et des entreprises de qualité pour les aider à réussir en ligne.",
            'image3' => 'about3.png',
        ]);

    }
}
