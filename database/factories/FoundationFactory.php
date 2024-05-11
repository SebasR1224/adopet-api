<?php

namespace Database\Factories;

use App\Models\Foundation;
use App\Models\Status;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Foundation>
 */
class FoundationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status = Status::where('type', Foundation::class)->get('code');
        return [
            'name' => fake()->name(),
            'logo' => fake()->imageUrl(),
            'nit' => fake()->numberBetween(10000000, 99999999),
            'description' => fake()->text(),
            'email' => fake()->unique()->email(),
            'phone' => fake()->phoneNumber(),
            'web_site' => fake()->url(),
            'mission' => fake()->text(),
            'vision' => rand(0, 1) ? fake()->text() : null,
            'ranking_score' => rand(0, 1) ? fake()->numberBetween(1, 5) : null,
            'status' => $status->random()->code,
        ];
    }
}
