<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contactus;
use Carbon\Carbon;

class ContactusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contactus::create([
            'contact_title1'   => 'Appelez-nous',
            'new_accounts'     => 'Nouveaux comptes: 1-800-123-4567',
            'contact_support'  => 'Soutien: 1-800-123-4569',
            'contact_icon1'    => 'default_contact_icon1.jpg',
            'contact_title2'   => 'Écrivez-nous',
            'email_one'        => 'example@example.com',
            'email_two'        => 'example@example.com',
            'contact_icon2'    => 'default_contact_icon2.jpg',
            'contact_title3'   => 'Visitez-nous',
            'contact_address'  => '2231 Sycamore Lake Road',
            'contact_address_two'  => 'Green Bay, WI 54304',
            'contact_icon3'    => 'default_contact_icon3.jpg',
            'created_at'       => Carbon::now(),
        ]);
    }
}
