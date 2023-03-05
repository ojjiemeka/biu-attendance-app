<?php
declare(strict_types=1);

namespace App\Traits\Models;

use App\Models\Role;
// use App\Models\Role as ModelsRole;

trait AuthByRole
{
    public function isRoot()
    {
        return $this->hasRole(Role::ROOT);
    }

    public function hasRole($roleName)
    {
        $roleName = explode('|', $roleName);

        return ($this->roles()->whereIn('name', $roleName)->count());
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'auth_role_user', 'user_id', 'role_id');
    }

    public function isAdmin()
    {
        return $this->hasRole(Role::ADMIN);
    }

    public function isTeacher()
    {
        return $this->hasRole(Role::LECTURER);
    }

    public function isCourseRep()
    {
        return $this->hasRole(Role::COURSE_REP);
    }

    public function isStudent()
    {
        return $this->hasRole(Role::STUDENT);
    }
}
