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
            'title' => 'Développement',
            'description' => "Nous utilisons des tactiques de marketing stratégique dont l'efficacité a été prouvée.",
            'process_photo' => 'process2.jpg',
            'created_at' => Carbon::now(),
        ]);

        Process::create([
            'title' => 'Design',
            'description' => "Nous utilisons des tactiques de marketing stratégique dont l'efficacité a été prouvée.",
            'process_photo' => 'process4.jpg',
            'created_at' => Carbon::now(),
        ]);

        Process::create([
            'title' => 'Soutien',
            'description' => "Nous utilisons des tactiques de marketing stratégique dont l'efficacité a été prouvée.",
            'process_photo' => 'process1.jpg',
            'created_at' => Carbon::now(),
        ]);

        Process::create([
            'title' => 'Stratégie',
            'description' => "Nous utilisons des tactiques de marketing stratégique dont l'efficacité a été prouvée.",
            'process_photo' => 'process3.jpg',
            'created_at' => Carbon::now(),
        ]);
    }
}
