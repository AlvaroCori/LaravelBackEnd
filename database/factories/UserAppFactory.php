<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class UserAppFactory extends Factory
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
            'email'=> fake()->email(),
            'password'=> fake()->password(),
            'phone' => fake()->phoneNumber(),
            'remember_token' => (string) fake()->numberBetween(1, 10),
            'created_at' => now(),
            'updated_at'=> null,
        ];
    }
}
