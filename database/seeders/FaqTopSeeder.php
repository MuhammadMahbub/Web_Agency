<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FaqTop;

class FaqTopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FaqTop::create([
            'title_one'       => 'Payment Methods', 
            'description_one' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore.', 
            'title_two'       => 'System Solutions', 
            'description_two' => 'Dolore magna aliquyam erat, sed diam voluptua vero eos et accusam et justo duo dolores et ea rebum.', 
            'title_three'       => 'Technical Support', 
            'description_three' => 'Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet lorem ipsum dolor sit amet.', 
        ]);
    }
}
