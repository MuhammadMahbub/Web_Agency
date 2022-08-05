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
            'gallery_title' => 'Web Design Company',
            'gallery_photo' => 'gallery1.jpg',
            'created_at' => Carbon::now(),
        ]);

        Gallery::create([
            'gallery_name_id' => '2',
            'gallery_title' => 'Logo Design',
            'gallery_photo' => 'gallery2.jpg',
            'created_at' => Carbon::now(),
        ]);

        Gallery::create([
            'gallery_name_id' => '3',
            'gallery_title' => 'Graphics Design',
            'gallery_photo' => 'gallery3.jpg',
            'created_at' => Carbon::now(),
        ]);

        Gallery::create([
            'gallery_name_id' => '1',
            'gallery_title' => '3D Animation',
            'gallery_photo' => 'gallery4.jpg',
            'created_at' => Carbon::now(),
        ]);

        Gallery::create([
            'gallery_name_id' => '1',
            'gallery_title' => 'Android Apps',
            'gallery_photo' => 'gallery5.jpg',
            'created_at' => Carbon::now(),
        ]);

        Gallery::create([
            'gallery_name_id' => '2',
            'gallery_title' => 'Android Apps',
            'gallery_photo' => 'gallery4.jpg',
            'created_at' => Carbon::now(),
        ]);
    }
}
