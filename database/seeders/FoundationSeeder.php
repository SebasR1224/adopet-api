<?php

namespace Database\Seeders;

use App\Models\Foundation;
use App\Models\LegalRepresentative;
use App\Models\Veterinarian;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FoundationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Foundation::factory()
            ->count(10)
            ->has(LegalRepresentative::factory()->count(3))
            ->has(Veterinarian::factory()->count(5))
            ->create();
    }
}
