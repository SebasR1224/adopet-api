<?php

namespace Database\Seeders;

use App\Models\Foundation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FoundationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Foundation::factory()->count(10)->create();
    }
}
