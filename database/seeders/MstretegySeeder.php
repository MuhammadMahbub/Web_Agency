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
            'title' => 'Ressources pour le marketing et la conception de sites Web B2B',
            'description' => "L'acquisition de clients B2B n'est pas la même que celle de clients B2C : un site Web B2B, le message de la marque et le marketing de contenu jouent un rôle très différent. Nous comprenons le marketing B2B et l'entonnoir de vente, ainsi que les tactiques qui génèrent et nourrissent les prospects idéaux.",
        ]);
    }
}
