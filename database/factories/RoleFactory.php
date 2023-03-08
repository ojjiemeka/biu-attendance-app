<?php

namespace Database\Factories;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class RoleFactory extends Factory
{
    protected $model = Role::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $faker  = $this->faker;

        $name[] = [
            Role::ROOT,
            Role::ADMIN,
            Role::LECTURER,
            Role::COURSE_REP
        ];

        $admin_email = config('settings.org_admin');


        return [
            Role::create([
                'name'         => Role::ROOT,
                'display_name' => 'Root-User',
                'description'  => 'System Root User',
            ]),

            Role::create([
                'name'         => Role::ADMIN,
                'display_name' => 'System-Administrator',
                'description'  => 'System Administrator',
            ]),

            Role::create([
                'name'         => Role::LECTURER,
                'display_name' => 'Lecturer',
                'description'  => 'Lecturer',
            ]),

            Role::create([
                'name'         => Role::COURSE_REP,
                'display_name' => 'Course Rep',
                'description'  => 'Course Rep',
            ]),

            User::factory()->create([
                'email'    => $admin_email,
                'password' => bcrypt('admin-secret'),
            ])

        ];
    }
}
