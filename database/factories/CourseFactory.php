<?php

namespace Database\Factories;

use App\Models\Classroom\Courses;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CourseFactory extends Factory
{

    protected $model = Courses::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker  = $this->faker;

        $courses = [
            'CSC',
            'MTH',
            'GST',
            'IDS',
            'PHY',
            'BOT',
            'CHEM',
            'BIO',
            'MCB',
        ];

        return [
            'uuid'             =>  $faker->uuid(),
            'course_code'      =>  $faker->randomElement($courses.'/ABC'.'/'.rand(101,109)),
            'course_desc'      =>  $faker->text(),
            'lecturer_id'      =>  $faker->randomElement(rand(1,10)),
            'duration'         =>  $faker->numerify('2')
        ];
    }
}
