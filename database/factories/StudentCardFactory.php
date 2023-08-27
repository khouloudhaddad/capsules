<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Enums\SchoolEnum;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StudentCard>
 */
class StudentCardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'school' => fake()->randonElement(SchoolEnum::cases()),
            'description' => fake()->text,
            'is_internal' => fake()->boolean,
            'user_id' => User::factory(),
            'date_of_birth' => fake()->dateTimeBetween('-50 years','-11 years')->format('Y-m-d'),
        ];
    }
}
