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
            'about_title'              => 'About',
            'service_title'            => 'Service',
            'service_details_title'    => 'Service Details',
            'blog_title'               => 'Blogs',
            'blog_details_title'       => 'Blog Details',
            'team_title'               => 'Teams',
            'team_details_title'       => 'Team Details',
            'testimonial_title'        => 'Testimonials',
            'contact_title'            => 'Contacts',
            'faq_title'                => 'FAQ',
            'feature_title'            => 'Features',
            'gallery_title'            => 'Galleries',
        ]);
    }
}
