<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\GalleryName;
use Illuminate\Database\Seeder;

class GalleryNameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GalleryName::create([
            'gallery_name' => 'Conception Web',
            'created_at' => Carbon::now(),
        ]);

        GalleryName::create([
            'gallery_name' => 'Développement web',
            'created_at' => Carbon::now(),
        ]);

        GalleryName::create([
            'gallery_name' => 'Conception graphique',
            'created_at' => Carbon::now(),
        ]);
    }
}
