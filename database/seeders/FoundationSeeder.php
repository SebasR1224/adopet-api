<?php

namespace Database\Seeders;

use App\Models\Foundation;
use App\Models\LegalRepresentative;
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
            ->has(LegalRepresentative::factory()->count(rand(1,5)))
            ->create();
    }
}
