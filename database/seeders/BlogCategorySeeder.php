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
            'category_name' => 'Corporate',
            'created_at' => Carbon::now(),
        ]);

        BlogCategory::create([
            'category_name' => 'Business ',
            'created_at' => Carbon::now(),
        ]);

        BlogCategory::create([
            'category_name' => 'Entetainment',
            'created_at' => Carbon::now(),
        ]);

        BlogCategory::create([
            'category_name' => 'News',
            'created_at' => Carbon::now(),
        ]);

        BlogCategory::create([
            'category_name' => 'Education',
            'created_at' => Carbon::now(),
        ]);
    }
}
