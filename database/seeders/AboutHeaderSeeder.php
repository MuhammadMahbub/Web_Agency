<?php

namespace Database\Seeders;

use App\Models\AboutHeader;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AboutHeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        AboutHeader::create([
            'heading'    => 'We love what we do and we love helping others succeed at what they love',
            'name'       => 'Gregory F. Parrino',
            'post'       => 'CEO',
            'created_at' => Carbon::now(),
        ]);
    }
}
