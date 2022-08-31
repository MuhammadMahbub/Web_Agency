<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Review;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Review::create([
            'company_name' => 'Assurance des yeux',
            'name' => 'merGeorge M. Batyketing',
            'comment' => "J'avais besoin de plus de prospects pour mes services. Pay-per-click, bannières et peut-être même des brochures. Ils ont fait une analyse de mon site existant. Il s'est avéré que mon site est interdit par Google, et je ne le savais pas !",
            'image' => 'review1.jpg',
            'created_at' => Carbon::now(),
        ]);

        Review::create([
            'company_name' => 'Assurance-vie',
            'name' => 'merGeorge M. Batyketing',
            'comment' => "J'avais besoin de plus de prospects pour mes services. Pay-per-click, bannières et peut-être même des brochures. Ils ont fait une analyse de mon site existant. Il s'est avéré que mon site est interdit par Google, et je ne le savais pas !",
            'image' => 'review2.jpg',
            'created_at' => Carbon::now(),
        ]);

        Review::create([
            'company_name' => 'assurance-accident',
            'name' => 'merGeorge M. Batyketing',
            'comment' => "J'avais besoin de plus de prospects pour mes services. Pay-per-click, bannières et peut-être même des brochures. Ils ont fait une analyse de mon site existant. Il s'est avéré que mon site est interdit par Google, et je ne le savais pas !",
            'image' => 'review3.jpg',
            'created_at' => Carbon::now(),
        ]);

        Review::create([
            'company_name' => "Sauver l'assurance-vie",
            'name' => 'merGeorge M. Batyketing',
            'comment' => "J'avais besoin de plus de prospects pour mes services. Pay-per-click, bannières et peut-être même des brochures. Ils ont fait une analyse de mon site existant. Il s'est avéré que mon site est interdit par Google, et je ne le savais pas !",
            'image' => 'review4.jpg',
            'created_at' => Carbon::now(),
        ]);
    }
}
