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
            'title1' => 'Who We Are',
            'description1' => 'We are a team of San Diego web design and development professionals who love partnering with good people and businesses to help them achieve online success',
            'image1' => 'about1.png',

            'title2' => 'What We do',
            'description2' => 'We are a team of San Diego web design and development professionals who love',
            'image2' => 'about2.png',

            'title3' => 'Why We Are',
            'description3' => 'We are a team of San Diego web design and development professionals who love partnering with good people and businesses to help them achieve online success',
            'image3' => 'about3.png',
        ]);

    }
}
