<?php

use App\Models\Auth\Lecturer;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('core_lecturers', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->foreignId('user_id');
            $table->char('status', 12)->default(Lecturer::STATUS_ACTIVE);
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('core_students', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->char('mat_number', 15);
            $table->string('department');
            $table->string('faculty');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('core_courses', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->string('course_code');
            $table->string('course_desc');
            $table->string('lecturer_id');
            $table->string('duration');
            $table->string('level');
            $table->string('department');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('core_attendance', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->foreignId('course_id');
            $table->foreignId('lecturer_id');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->char('mat_number', 15);
            $table->string('department');
            $table->string('faculty');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('core_lecturers');
        Schema::dropIfExists('core_students');
        Schema::dropIfExists('core_courses');
        Schema::dropIfExists('core_attendance');
    }
};
