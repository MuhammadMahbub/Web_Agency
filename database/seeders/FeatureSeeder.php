<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Feature;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Feature::create([
            'title' => '1/2',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere dolorem nisi unde itaque, aliquid. Necessitatibus, dolorem tempora repudiandae modi. Quis, esse eveniet suscipit! Enim dicta voluptate quas ea, facilis repellat!',
            'created_at' => Carbon::now(),
        ]);

        Feature::create([
            'title' => '1/2',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere dolorem nisi unde itaque, aliquid. Necessitatibus, dolorem tempora repudiandae modi. Quis, esse eveniet suscipit! Enim dicta voluptate quas ea, facilis repellat!',
            'created_at' => Carbon::now(),
        ]);
        Feature::create([
            'title' => '1/2',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere dolorem nisi unde itaque, aliquid. Necessitatibus, dolorem tempora repudiandae modi. Quis, esse eveniet suscipit! Enim dicta voluptate quas ea, facilis repellat!',
            'created_at' => Carbon::now(),
        ]);
        Feature::create([
            'title' => '1/2',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere dolorem nisi unde itaque, aliquid. Necessitatibus, dolorem tempora repudiandae modi. Quis, esse eveniet suscipit! Enim dicta voluptate quas ea, facilis repellat!',
            'created_at' => Carbon::now(),
        ]);
        Feature::create([
            'title' => '1/2',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere dolorem nisi unde itaque, aliquid. Necessitatibus, dolorem tempora repudiandae modi. Quis, esse eveniet suscipit! Enim dicta voluptate quas ea, facilis repellat!',
            'created_at' => Carbon::now(),
        ]);
        Feature::create([
            'title' => '1/2',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere dolorem nisi unde itaque, aliquid. Necessitatibus, dolorem tempora repudiandae modi. Quis, esse eveniet suscipit! Enim dicta voluptate quas ea, facilis repellat!',
            'created_at' => Carbon::now(),
        ]);
    }
}
