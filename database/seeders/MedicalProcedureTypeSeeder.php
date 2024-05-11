<?php

namespace Database\Seeders;

use App\Models\MedicalProcedureType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MedicalProcedureTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = include(database_path('data/medical-procedure-type-data.php'));
        foreach ($data as $type) {
            foreach ($type['procedures'] as $procedure) {
                MedicalProcedureType::create([
                    'type' => $type['type'],
                    'procedure' => $procedure
                ]);
            }
        }
    }
}
