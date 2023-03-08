<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker  = $this->faker;
        $length = 10;

        return [
            'first_name'        => $faker->firstName(),
            'middle_name'       => $faker->name(),
            'last_name'         => $faker->lastName(),
            'phone'             => $faker->numerify('080########'),
            'email'             => $faker->unique()->safeEmail(),
            'username'          => $faker->unique()->userName,
            'email'             => $faker->unique()->safeEmail(),
            'password'          => Hash::make('admin123'), // password
            'remember_token'    => Str::random(10),
            'phone_verified_at' => now(),
            'email_verified_at' => now(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    // public function unverified(): static
    // {
    //     return $this->state(fn (array $attributes) => [
    //         'email_verified_at' => null,
    //     ]);
    // }
}
