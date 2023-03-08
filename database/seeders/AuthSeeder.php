<?php

namespace Database\Seeders;

use App\Models\Auth\Permission;
use App\Models\Auth\Role;
use App\Models\Auth\User;
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
           /* Creating a new role with the name of ROOT, display name of Root-User and description of
           System Root User. */

        //    DB::table('auth_roles')->insert([
        //         'name'         => Role::ROOT,
        //         'display_name' => 'Root-User',
        //         'description'  => 'System Root User',
        // ]);
        
        
            Role::create([
                'name'         => Role::ROOT,
                'display_name' => 'Root-User',
                'description'  => 'System Root User',
            ]);

            Role::create([
                'name'         => Role::ADMIN,
                'display_name' => 'System-Administrator',
                'description'  => 'System Administrator',
            ]);

            Role::create([
                'name'         => Role::LECTURER,
                'display_name' => 'Lecturer',
                'description'  => 'Lecturer',
            ]);

            Role::create([
                'name'         => Role::COURSE_REP,
                'display_name' => 'Course Rep',
                'description'  => 'Course Rep',
            ]);


           /* Getting the email address of the admin from the .env file. */
            $admin_email = config('settings.org_admin');
            /**
             * @var User $rootUser
             */

            /* Creating a new user with the email address of the admin and the password of
            admin-secret. */
            // User::create([
            //     'email'    => $admin_email,
            //     'password' => bcrypt('admin-secret'),
            // ]);

        //    /* Attaching the roles and permissions to the root user. */
        //     $rootUser->roles()->attach([$rootRole->id, $adminRole->id, $lecturerRole->id, $courseRepRole->id]);
        //     $rootUser->permissions()->attach([$rootPermission->id]);
    }
}
