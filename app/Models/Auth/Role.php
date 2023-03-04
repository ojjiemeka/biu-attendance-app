<?php

namespace App\Models;

use App\Traits\Models\FindByName;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
    use HasFactory;
    use FindByName;

    const ROOT   = 'super_admin';
    const ADMIN  = 'sub_admin';
    const LECTURER = 'lecturer';
    const COURSE_REP = 'course_rep';
    const STUDENT = 'student';

    protected $table    = 'auth_roles';
    protected $fillable = [
        'name',
        'display_name',
        'description',
    ];

     /**
     * @return BelongsToMany
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'auth_role_user');
    }

    /**
     * @return BelongsToMany
     */
    public function permissions(): BelongsToMany
    {
        return $this->belongsToMany(Permission::class, 'auth_permission_role');
    }

}
