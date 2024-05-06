<?php

namespace Database\Factories;

use App\Constants\Animal\AnimalStatus;
use App\Models\Animal;
use App\Models\Especie;
use App\Models\Foundation;
use App\Models\Status;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Animal>
 */
class AnimalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $especies = Especie::all();
        $especie = $especies->random();

        $status = Status::where('type', Animal::class)->get('code');
        $selectedStatus = $status->random()->code;

        $foundations = Foundation::all();

        return [
            'name' => fake()->name(),
            'image' => fake()->imageUrl(),
            'description' => fake()->text(),
            'age' => fake()->numberBetween(1,20),
            'coat_color' => fake()->colorName(),
            'especie' => $especie->name,
            'race' => $especie->races()->get()->random()->name,
            'weight' => fake()->randomFloat(),
            'status' => $selectedStatus,
            'gender' => fake()->randomElement(['MALE', 'FEMALE']),
            'foundation_id' => $selectedStatus === AnimalStatus::CODE_RESCUED
                ? $foundations->random()->id
                : null
        ];
    }
}
