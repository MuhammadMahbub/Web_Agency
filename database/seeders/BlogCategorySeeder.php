<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BlogCategory;
use Carbon\Carbon;

class BlogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BlogCategory::create([
            'category_name' => 'Entreprise',
            'created_at' => Carbon::now(),
        ]);

        BlogCategory::create([
            'category_name' => 'Entreprise ',
            'created_at' => Carbon::now(),
        ]);

        BlogCategory::create([
            'category_name' => 'Divertissement',
            'created_at' => Carbon::now(),
        ]);

        BlogCategory::create([
            'category_name' => 'Nouvelles',
            'created_at' => Carbon::now(),
        ]);

        BlogCategory::create([
            'category_name' => 'Éducation',
            'created_at' => Carbon::now(),
        ]);
    }
}
