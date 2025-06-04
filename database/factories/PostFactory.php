<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(), // A bejegyzés címe, véletlenszerű mondat
            'user_id' => User::factory(), // Hivatkozás a UserFactory-ra, hogy létrehozzon egy szerzőt
            'creator' => fake()->name(), // A bejegyzés szerzőjének neve
            'content' => fake()->paragraph(), // A bejegyzés tartalma
        ];
    }
}
