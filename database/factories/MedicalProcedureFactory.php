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

        return [
            'title' => fake()->title(),
            'type' => $types->random()->id,
            'description' => fake()->text(),
            'observations' => fake()->text()
        ];
    }
}
