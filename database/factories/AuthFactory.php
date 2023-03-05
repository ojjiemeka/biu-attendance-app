<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AuthFactory extends Factory
{
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
            'first_name'        => $faker->first_name(),
            'middle_name'       => $faker->middle_name(),
            'last_name'         => $faker->last_name(),
            'phone'             => $this->faker->numerify('080########'),
            'email'             => $faker->unique()->safeEmail(),
            'username'          => $faker->unique()->userName,
            'email'             => $this->faker->unique()->safeEmail(),
            'password'          => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token'    => Str::random(10),
            'phone_verified_at' => now(),
            'email_verified_at' => now(),
        ];
    }
}
