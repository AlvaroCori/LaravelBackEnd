<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\UserApp;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    //php artisan migrate:fresh --seed
    //php artisan db:seed --class:nameSeeder
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        UserApp::factory()->create([
            'name' => fake()->name(),
            'email'=> fake()->email(),
            'password'=> fake()->password(),
            'phone' => fake()->phoneNumber(),
            'remember_token' => (string) fake()->numberBetween(1, 10),
            'created_at' => now(),
            'updated_at'=> null,
        ]);
    }
}
