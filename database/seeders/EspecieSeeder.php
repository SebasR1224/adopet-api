<?php

namespace Database\Seeders;

use App\Models\Especie;
use App\Models\Race;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EspecieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = include(database_path('data/especie-data.php'));

        foreach ($data as $especieData) {
            $especie = Especie::create([
                'name' => $especieData['name']
            ]);

            foreach ($especieData['race'] as $race) {
                Race::create([
                    'name' => $race,
                    'especie_id' =>$especie->id
                ]);
            }
        }
    }
}
