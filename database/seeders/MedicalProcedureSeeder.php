<?php

namespace Database\Seeders;

use App\Models\MedicalProcedure;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MedicalProcedureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MedicalProcedure::factory()->count(15)->create();
    }
}
