<?php

namespace App\Models\Auth;

use App\Http\Controllers\Classroom\CourseController;
use App\Models\Classroom\Courses;
use App\Traits\Models\HasSex;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Lecturer extends Model
{
    // use HasSex;
    use HasFactory;

    protected $table = 'core_profile_lecturers';

    const STATUS_ACTIVE               = 'active';
    const STATUS_SUSPENDED            = 'suspended';
    // const STATUS_PENDING_VERIFICATION = 'pending';
    // const STATUS_VERIFIED             = 'verified';

    protected $fillable = [
        'uuid',
        'user_id',
        'sex',
        'course_id',
        'status',
        // 'folio_number',
        // 'most_recent_employer',
        // 'most_recent_role',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function getFullNameAttribute(): string
    {
        return $this->user->name();
    }

    public function getCourses(): BelongsTo
    {
        return $this->belongsTo(Courses::class);
    }

    public static function statuses(): array
    {
        return [
            self::STATUS_ACTIVE                 => 'New/Unverified Profile',
            // self::STATUS_PENDING_VERIFICATION => 'Awaiting Profile Verification',
            // self::STATUS_VERIFIED             => 'Verified Profile',
            self::STATUS_SUSPENDED            => 'Suspended/De-activated',
        ];
    }

    public function getStatus(): string
    {
        return self::statuses()[$this->status];
    }
}
