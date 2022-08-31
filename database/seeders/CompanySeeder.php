<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\company;
use Carbon\Carbon;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::create([
            'title'=>"'Nous sommes l'une des entreprises de conception de sites Web les plus efficaces.",
            'description'=> "Se mettre en ligne est facile. Réussir en ligne est une autre histoire. De nos jours, il vous faut plus qu'un beau site web pour vous démarquer. Des solutions de marketing en ligne. Une conception web basée sur la conversion, associée à un plan de marketing générant des prospects, votre succès en ligne est inévitable.",
            'button_text' => 'Commencez',
            'button_url' => '',
            'created_at' => Carbon::now(),
        ]);
    }
}
