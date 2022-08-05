<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Testimonial;
use Carbon\Carbon;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Testimonial::create([
            'user_name' => 'Josephine B. Anderson',
            'user_review' => 'This guys are awesome! It is hard to find a web design company who can actually listen and understand what you need. I’m 100% satisfied with this guys.',
            'user_photo' => 'testimonial_img1.jpg',
            'created_at' => Carbon::now(),
        ]);

        Testimonial::create([
            'user_name' => 'George M. Baty',
            'user_review' => 'This guys are awesome! It is hard to find a web design company who can actually listen and understand what you need. I’m 100% satisfied with this guys.',
            'user_photo' => 'testimonial_img2.jpg',
            'created_at' => Carbon::now(),
        ]);

        Testimonial::create([
            'user_name' => 'Jeffrey P. McAllister',
            'user_review' => 'This guys are awesome! It is hard to find a web design company who can actually listen and understand what you need. I’m 100% satisfied with this guys.',
            'user_photo' => 'testimonial_img3.jpg',
            'created_at' => Carbon::now(),
        ]);

        Testimonial::create([
            'user_name' => 'Janine T. Austin',
            'user_review' => 'This guys are awesome! It is hard to find a web design company who can actually listen and understand what you need. I’m 100% satisfied with this guys.',
            'user_photo' => 'testimonial_img4.jpg',
            'created_at' => Carbon::now(),
        ]);

        Testimonial::create([
            'user_name' => 'Kelly L. McMeans',
            'user_review' => 'This guys are awesome! It is hard to find a web design company who can actually listen and understand what you need. I’m 100% satisfied with this guys.',
            'user_photo' => 'testimonial_img5.jpg',
            'created_at' => Carbon::now(),
        ]);

        Testimonial::create([
            'user_name' => 'Charles K. Silvey',
            'user_review' => 'This guys are awesome! It is hard to find a web design company who can actually listen and understand what you need. I’m 100% satisfied with this guys.',
            'user_photo' => 'testimonial_img1.jpg',
            'created_at' => Carbon::now(),
        ]);
    }
}
