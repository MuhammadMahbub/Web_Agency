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
            'heading'    => "Nous aimons ce que nous faisons et nous aimons aider les autres à réussir dans ce qu'ils aiment.",
            'name'       => 'Gregory F. Parrino',
            'post'       => 'PDG',
            'created_at' => Carbon::now(),
        ]);
    }
}
