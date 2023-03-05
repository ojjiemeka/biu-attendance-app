<?php

namespace Database\Seeders;

use App\Models\Auth\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::transaction(function () {
            $rootRole = Role::create([
                'name'         => Role::ROOT,
                'display_name' => 'Root-User',
                'description'  => 'System Root User',
            ]);

            $adminRole = Role::create([
                'name'         => Role::ADMIN,
                'display_name' => 'System-Administrator',
                'description'  => 'System Administrator',
            ]);

            $lecturerRole = Role::create([
                'name'         => Role::LECTURER,
                'display_name' => 'Lecturer',
                'description'  => 'Lecturer',
            ]);

            $courseRepRole = Role::create([
                'name'         => Role::COURSE_REP,
                'display_name' => 'Course Rep',
                'description'  => 'Course Rep',
            ]);

            $rootPermission = Permission::create([
                'name'         => Permission::ROOT,
                'display_name' => 'All Permissions',
                'description'  => 'All Permissions',
            ]);

            $rootRole->permissions()->attach($rootPermission->id);

            $admin_email = config('settings.org_admin');
            /**
             * @var User $rootUser
             */
            $rootUser = User::factory()->create([
                'email'    => $admin_email,
                'password' => bcrypt('admin-secret'),
            ]);
            $rootUser->roles()->attach([$rootRole->id, $adminRole->id, $lecturerRole->id, $courseRepRole->id]);
            $rootUser->permissions()->attach([$rootPermission->id]);

        });
    }
}
