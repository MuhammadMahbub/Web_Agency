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
            'user_review' => 'Ces gars sont géniaux ! Il est difficile de trouver une entreprise de conception de sites Web qui peut réellement écouter et comprendre ce dont vous avez besoin. Je suis 100% satisfait de ces gars-là.',
            'user_photo' => 'testimonial_img1.jpg',
            'created_at' => Carbon::now(),
        ]);

        Testimonial::create([
            'user_name' => 'George M. Baty',
            'user_review' => 'Ces gars sont géniaux ! Il est difficile de trouver une entreprise de conception de sites Web qui peut réellement écouter et comprendre ce dont vous avez besoin. Je suis 100% satisfait de ces gars-là.',
            'user_photo' => 'testimonial_img2.jpg',
            'created_at' => Carbon::now(),
        ]);

        Testimonial::create([
            'user_name' => 'Jeffrey P. McAllister',
            'user_review' => 'Ces gars sont géniaux ! Il est difficile de trouver une entreprise de conception de sites Web qui peut réellement écouter et comprendre ce dont vous avez besoin. Je suis 100% satisfait de ces gars-là.',
            'user_photo' => 'testimonial_img3.jpg',
            'created_at' => Carbon::now(),
        ]);

        Testimonial::create([
            'user_name' => 'Janine T. Austin',
            'user_review' => 'Ces gars sont géniaux ! Il est difficile de trouver une entreprise de conception de sites Web qui peut réellement écouter et comprendre ce dont vous avez besoin. Je suis 100% satisfait de ces gars-là.',
            'user_photo' => 'testimonial_img4.jpg',
            'created_at' => Carbon::now(),
        ]);

        Testimonial::create([
            'user_name' => 'Kelly L. McMeans',
            'user_review' => 'Ces gars sont géniaux ! Il est difficile de trouver une entreprise de conception de sites Web qui peut réellement écouter et comprendre ce dont vous avez besoin. Je suis 100% satisfait de ces gars-là.',
            'user_photo' => 'testimonial_img5.jpg',
            'created_at' => Carbon::now(),
        ]);

        Testimonial::create([
            'user_name' => 'Charles K. Silvey',
            'user_review' => 'Ces gars sont géniaux ! Il est difficile de trouver une entreprise de conception de sites Web qui peut réellement écouter et comprendre ce dont vous avez besoin. Je suis 100% satisfait de ces gars-là.',
            'user_photo' => 'testimonial_img1.jpg',
            'created_at' => Carbon::now(),
        ]);
    }
}
