<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BuyNow;

class BuyNowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BuyNow::create([
            'image' => 'buy_image1.jpg',
            'title' => 'Tools of Trading: Modern Marketing',
            'description' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam numy eirmod.',
            'buy_now_link' => 'Buy It Now',
            'buy_now_url' => '',
        ]);
        BuyNow::create([
            'image' => 'buy_image2.jpg',
            'title' => 'Tools of Trading: Modern Marketing',
            'description' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam numy eirmod.',
            'buy_now_link' => 'Buy It Now',
            'buy_now_url' => '',
        ]);
        BuyNow::create([
            'image' => 'buy_image3.jpg',
            'title' => 'Tools of Trading: Modern Marketing',
            'description' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam numy eirmod.',
            'buy_now_link' => 'Buy It Now',
            'buy_now_url' => '',
        ]);
    }
}
