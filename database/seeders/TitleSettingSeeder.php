<?php

namespace Database\Seeders;

use App\Models\TitleSetting;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TitleSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TitleSetting::create([
            'about_title'              => 'À propos de',
            'service_title'            => 'Service',
            'service_details_title'    => 'Détails du service',
            'blog_title'               => 'Blogs',
            'blog_details_title'       => 'Détails du blog',
            'team_title'               => 'Équipes',
            'team_details_title'       => "Détails de l'équipe",
            'testimonial_title'        => 'Témoignages',
            'contact_title'            => 'Contacts',
            'faq_title'                => 'FAQ',
            'feature_title'            => 'Caractéristiques',
            'gallery_title'            => 'Galleries',
        ]);
    }
}
