<?php

namespace Database\Factories;

use App\Models\ReportAbandonedAnimal;
use App\Models\Status;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ReportAbandonedAnimal>
 */
class ReportAbandonedAnimalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status = Status::where('type', ReportAbandonedAnimal::class)->get('code');
        $abandonmentStatus = Status::where('type', 'App\Constants\AbandonmentStatus')->get('code');

        return [
            'title' => fake()->title(),
            'description' => fake()->text(),
            'image' => fake()->imageUrl(),
            'status' => $status->random()->code,
            'abandonment_place' => fake()->address(),
            'abandonment_status' => $abandonmentStatus->random()->code,
            'abandonment_date' => rand(0,1) ? fake()->date() : null,
        ];
    }
}
