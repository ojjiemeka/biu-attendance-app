<?php

namespace App\Models\Classroom;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $table = 'core_attendance';

    protected $fillable = [
        'uuid',
        'course_id',
        'lecturer_id',
        'course_desc',
        'first_name',
        'middle_name',
        'last_name',
        'mat_number',
        'department',
        'faculty',
    ];

}
