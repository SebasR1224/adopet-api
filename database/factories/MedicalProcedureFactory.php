<?php

namespace Database\Factories;

use App\Constants\Animal\AnimalStatus;
use App\Models\Animal;
use App\Models\MedicalProcedureType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MedicalProcedure>
 */
class MedicalProcedureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $types = MedicalProcedureType::all('id');
        $animals = Animal::where('status', AnimalStatus::CODE_IN_MEDICAL_PROCEDURE)->get('id');
        return [
            'title' => fake()->title(),
            'type' => $types->random()->id,
            'description' => fake()->text(),
            'observations' => fake()->text(),
            'animal_id' => $animals ? $animals->random()->id : null
        ];
    }
}
