<?php

namespace App\Models\Classroom;

use App\Models\Auth\Lecturer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Courses extends Model
{
    use HasFactory;

    protected $table = 'core_courses';

    const LEVEL_100            = '100 LEVEL';
    const LEVEL_200            = '200 LEVEL';
    const LEVEL_300            = '300 LEVEL';
    const LEVEL_400            = '400 LEVEL';

    protected $fillable = [
        'uuid',
        'course_code',
        'course_desc',
        'lecturer_id',
        'duration',
    ];

    public static function getLevels(): array
    {
        return [
            self::LEVEL_100                => '100 LEVEL',
            self::LEVEL_200                => '200 LEVEL',
            self::LEVEL_300                => '300 LEVEL',
            self::LEVEL_400                => '400 LEVEL',
        ];
    }

    public function lecturers(): HasMany
    {
        return $this->hasMany(Lecturer::class);
    }
}
