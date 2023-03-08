<?php

namespace Database\Factories;

use App\Models\Auth\Lecturer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class LecturerFactory extends Factory
{

    protected $model = Lecturer::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker  = $this->faker;

        $sex = [
            'M',
            'F'
        ];

        return [
            'uuid'          =>  $faker->uuid(),
            'user_id'       =>  $faker->randomElement(rand(1,10)),
            'sex'           =>  $faker->randomElement($sex),
            'course_id'     =>  $faker->randomElement(rand(1,10)),
            'status'        =>  $$faker->word('active'),
        ];
    }
}
