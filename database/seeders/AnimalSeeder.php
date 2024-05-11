<?php

namespace Database\Seeders;

use App\Constants\Animal\AnimalStatus;
use App\Models\Animal;
use App\Models\MedicalProcedure;
use App\Models\ReportAbandonedAnimal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Animal::factory()
            ->count(50)
             ->afterCreating(function (Animal $animal) {
                if ($animal->status === AnimalStatus::CODE_IN_MEDICAL_PROCEDURE) {
                    $animal->medicalProcedures()->saveMany(
                        MedicalProcedure::factory()->count(3)->make()
                    );
                }
            })
            ->create()
            ->each(function (Animal $animal) {
                $isAbandoned = $animal->status === AnimalStatus::CODE_ABANDONED;
                $factoryData = $isAbandoned ? [] : [
                    'rescue_date' => fake()->dateTime(),
                    'rescue_observations' => fake()->text(),
                    'response_time' => fake()->time(),
                    'foundation_id' => $animal->foundation_id,
                ];

                $animal->report_abandoned_animal_id = ReportAbandonedAnimal::factory($factoryData)->create()->id;
                $animal->save();
            });
    }
}
