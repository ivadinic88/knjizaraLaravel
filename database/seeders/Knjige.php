<?php

namespace Database\Seeders;

use App\Models\Knjiga;
use Illuminate\Database\Seeder;

class Knjige extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 25; $i++){
            Knjiga::create([
                'naziv' => ucfirst($faker->word()),
                'autor' => $faker->name(),
                'zanrID' => $faker->numberBetween(1,5),
                'proizvodjacID' => $faker->numberBetween(1,4),
                'cena' => $faker->numberBetween(600,2000)
            ]);
        }
    }
}
