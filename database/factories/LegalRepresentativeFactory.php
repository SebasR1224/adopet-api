<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LegalRepresentative>
 */
class LegalRepresentativeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'surname' => fake()->lastName(),
            'dni' => fake()->numberBetween(10000000, 99999999),
            'email' => fake()->unique()->email(),
            'phone' => fake()->phoneNumber(),
            'address' => fake()->address()
        ];
    }
}
