<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mstretegy;

class MstretegySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mstretegy::create([
            'title' => 'B2B Marketing & Web Design Resources',
            'description' => 'B2B client acquisition is not the same as B2C– a B2B website, brand messaging and content marketing play a much different role. We understand the B2B marketing and sales funnel and the tactics that generate and nurture ideal client leads.',
        ]);
    }
}
