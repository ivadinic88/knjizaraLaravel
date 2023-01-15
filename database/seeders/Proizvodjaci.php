<?php

namespace Database\Seeders;

use App\Models\Proizvodjac;
use Illuminate\Database\Seeder;

class Proizvodjaci extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Proizvodjac::create([
            'proizvodjac' => 'Vulkan'
        ]);

        Proizvodjac::create([
            'proizvodjac' => 'Delfi'
        ]);

        Proizvodjac::create([
            'proizvodjac' => 'Carobna knjiga'
        ]);

        Proizvodjac::create([
            'proizvodjac' => 'Finesa'
        ]);


    }
}
