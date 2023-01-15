<?php

namespace Database\Seeders;

use App\Models\Zanr;
use Illuminate\Database\Seeder;

class Zanrovi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Zanr::create([
            'zanr' => 'Drama'
        ]);

        Zanr::create([
            'zanr' => 'Misterija'
        ]);

        Zanr::create([
            'zanr' => 'Popularna psihologija'
        ]);

        Zanr::create([
            'zanr' => 'Triler'
        ]);

        Zanr::create([
            'zanr' => 'Biografija'
        ]);


    }
}
