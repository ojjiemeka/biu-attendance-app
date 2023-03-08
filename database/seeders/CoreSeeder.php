<?php

namespace Database\Seeders;

use App\Models\Auth\Lecturer;
use App\Models\Classroom\Courses;
use App\Models\Role;
use App\Models\Auth\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
class CoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       /* Creating 10 users in the database. */
       for ($i = 0; $i < 10; $i++) {
        DB::table('products')->insert([
            'name' => 'Product ' . ($i + 1),
            'price' => rand(10, 100),
        ]);
    }

        /* Creating 10 lecturers in the database. */
        Lecturer::factory(10);

        /* Creating 10 courses in the database. */
        Courses::factory(10);


    }
}
