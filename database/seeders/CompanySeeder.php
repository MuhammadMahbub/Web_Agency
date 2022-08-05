<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\company;
use Carbon\Carbon;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::create([
            'title'=>'We are the one of the most effective Web Design Companies',
            'description'=> 'Getting online is easy. Succeeding online is a different story. You’ll need more than just a beautiful website to stand out these days. Online marketing solutions. Conversion-based web design coupled with a lead generating marketing plan, your online success is inevitable.',
            'button_text' => 'Get Started',
            'button_url' => '',
            'created_at' => Carbon::now(),
        ]);
    }
}
