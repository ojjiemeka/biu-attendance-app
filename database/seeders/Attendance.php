<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class Attendance extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $random_number = $faker->numberBetween($min = 100, $max = 999);
        $dept = $faker->randomElement([
            'csc',
            'bot',
            'phy',
            'mth'
        ]);
        $course_id = $faker->randomElement(['1', '2', '3', '4']);
        $lecturer_id = $faker->randomElement(['1', '2', '3', '4']);
        $course_desc= $faker->randomElement([
                                    'bot_213_plant life',
                                    'csc_415_computer analysis',
                                    'phy 368 - gravity',
                                    'mth 112 - algebra',
                                ]);
        // $gender = $faker->randomElement(['male', 'female']);
    	foreach (range(1,10) as $index) {
            DB::table('core_attendance')->insert([
                'uuid'          =>  $faker->uuid(),
                'course_id'     =>  $course_id,
                'lecturer_id'   =>  $lecturer_id,
                'course_desc'   =>  $course_desc,
                'first_name'    =>  $faker->firstName($gender = null),
                'middle_name'   =>  $faker->name(),
                'last_name'     =>  $faker->name(),
                'mat_number'    =>  $faker->text('SCN/'. $dept .'/190'.'/' . $random_number),
                'department'    =>  $faker->randomElement(['csc', 'mth', 'agric', 'mcb', 'phy', 'chem', 'bot']),
                'faculty'       =>  $faker->randomElement(['Science']),
            ]);
        } 
    }
}
