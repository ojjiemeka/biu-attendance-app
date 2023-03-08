<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AuthFactory extends Factory
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
}
