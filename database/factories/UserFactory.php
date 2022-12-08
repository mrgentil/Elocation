<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->lastName,
            'lastname' => $this->faker->firstName,
            'sexe' => array_rand(["H", "F"], 1),
            'email' => $this->faker->unique()->safeEmail(),
            'phone1' => $this->faker->unique()->phoneNumber,
            'phone2' => $this->faker->unique()->phoneNumber,
            'piece_identite' => array_rand(["CNI", "PASSPORT", "PERMIS DE CONDUIRE"], 1),
            'numero_piece_identite' => $this->faker->unique()->bankAccountNumber,
            'photo' => $this->faker->imageUrl(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
