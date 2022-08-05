<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Process;
use Illuminate\Database\Seeder;

class ProcessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Process::create([
            'title' => 'Development',
            'description' => 'We use strategic marketing tactics that have been proven to work.We use strategic marketing tactics that have been proven to work.',
            'process_photo' => 'process2.jpg',
            'created_at' => Carbon::now(),
        ]);

        Process::create([
            'title' => 'Design',
            'description' => 'We use strategic marketing tactics that have been proven to work.We use strategic marketing tactics that have been proven to work.',
            'process_photo' => 'process4.jpg',
            'created_at' => Carbon::now(),
        ]);

        Process::create([
            'title' => 'Support',
            'description' => 'We use strategic marketing tactics that have been proven to work.We use strategic marketing tactics that have been proven to work.',
            'process_photo' => 'process1.jpg',
            'created_at' => Carbon::now(),
        ]);

        Process::create([
            'title' => 'Strategy',
            'description' => 'We use strategic marketing tactics that have been proven to work.We use strategic marketing tactics that have been proven to work.',
            'process_photo' => 'process3.jpg',
            'created_at' => Carbon::now(),
        ]);
    }
}
