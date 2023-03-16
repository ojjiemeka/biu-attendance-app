<?php

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
        Schema::create('auth_users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('email', 100)->unique()->nullable();
            $table->string('username', 100)->nullable()->unique();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->string('phone')->nullable();
            $table->timestamp('phone_verified_at')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('auth_roles', function (Blueprint $table) {
            $table->id('id');
            $table->string('name', 32)->unique();
            $table->string('display_name')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('auth_role_user', function (Blueprint $table) {
            $table->id('id');
            $table->integer('role_id');
            $table->integer('user_id');

        });

        // Schema::table('auth_role_user', function (Blueprint $table) {
        //     $table->foreign('role_id')
        //           ->references('id')
        //           ->on('auth_roles')
        //           ->onDelete('cascade');

        //     $table->foreign('user_id')
        //           ->references('id')
        //           ->on('auth_users')
        //           ->onDelete('cascade');
        // });

        // Schema::create('auth_role_user', function (Blueprint $table) {
            
        //     $table->foreign('role_id')->references('id')->on('auth_roles');
        //     $table->foreign('user_id')->references('id')->on('auth_users');


        //     // $table->unique(['user_id', 'role_id'], 'rs_uid_rid');
        // });

        // Schema::create('auth_permission_user', function (Blueprint $table) {
        //     $table->foreignId('permission_id')->references('id')->on('auth_permissions');
        //     $table->foreignId('user_id')->references('id')->on('auth_users');

        //     // $table->foreign('permission_id', 'pu_pid')->references('id')->on('auth_permissions')
        //     //       ->onUpdate('cascade')->onDelete('cascade');
        //     // $table->foreign('user_id', 'pu_uid')->references('id')->on('auth_users')
        //     //       ->onUpdate('cascade')->onDelete('cascade');

        //     // $table->unique(['user_id', 'permission_id']);
        // });

        // Schema::create('auth_permission_role', function (Blueprint $table) {
        //     $table->foreignId('permission_id')->references('id')->on('auth_permissions');
        //     $table->foreignId('role_id')->references('id')->on('auth_roles');

        //     // $table->foreign('permission_id', 'pr_pid')->references('id')->on('auth_permissions')
        //     //       ->onUpdate('cascade')->onDelete('cascade');
        //     // $table->foreign('role_id', 'pr_rid')->references('id')->on('auth_roles')
        //     //       ->onUpdate('cascade')->onDelete('cascade');

        //     // $table->primary(['permission_id', 'role_id'], 'pr_pk');
        // });

        Schema::create('auth_sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });

        Schema::create('auth_password_resets', function (Blueprint $table) {
            $table->string('email')->index();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('auth_personal_access_tokens', function (Blueprint $table) {
            $table->id();
            $table->morphs('tokenable');
            $table->string('name');
            $table->string('token', 64)->unique();
            $table->text('abilities')->nullable();
            $table->timestamp('last_used_at')->nullable();
            $table->timestamp('expires_at')->nullable();
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('auth_personal_access_tokens');
        Schema::dropIfExists('auth_password_resets');
        Schema::dropIfExists('auth_sessions');
        Schema::dropIfExists('auth_role_user');
        Schema::dropIfExists('auth_roles');
        Schema::dropIfExists('auth_users');
    }
};
