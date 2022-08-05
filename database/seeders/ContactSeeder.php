<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
            'client_name'      => 'demo',
            'client_email'     => 'demo@demo.comm',
            'client_phone'     => '01783047819',
            'message_subject'   => 'git problem',
            'client_message'   => 'lorem ipsum dsfasdf',
        ]);
    }
}
