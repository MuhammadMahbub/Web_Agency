<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Gallery;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gallery::create([
            'gallery_name_id' => '1',
            'gallery_title' => 'Société de conception de sites Web',
            'gallery_photo' => 'gallery1.jpg',
            'created_at' => Carbon::now(),
        ]);

        Gallery::create([
            'gallery_name_id' => '2',
            'gallery_title' => 'Conception de logo',
            'gallery_photo' => 'gallery2.jpg',
            'created_at' => Carbon::now(),
        ]);

        Gallery::create([
            'gallery_name_id' => '3',
            'gallery_title' => 'Conception graphique',
            'gallery_photo' => 'gallery3.jpg',
            'created_at' => Carbon::now(),
        ]);

        Gallery::create([
            'gallery_name_id' => '1',
            'gallery_title' => 'Animation 3D',
            'gallery_photo' => 'gallery4.jpg',
            'created_at' => Carbon::now(),
        ]);

        Gallery::create([
            'gallery_name_id' => '1',
            'gallery_title' => 'Applications Android',
            'gallery_photo' => 'gallery5.jpg',
            'created_at' => Carbon::now(),
        ]);

        Gallery::create([
            'gallery_name_id' => '2',
            'gallery_title' => 'Applications Android',
            'gallery_photo' => 'gallery4.jpg',
            'created_at' => Carbon::now(),
        ]);
    }
}
