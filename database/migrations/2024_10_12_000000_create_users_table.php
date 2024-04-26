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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('role_id')->nullable();
            $table->string('name',60);
            $table->string('email',60)->unique();
            $table->string('password',60);
            $table->string('phone',60);
            $table->text('address')->nullable();
            $table->text('profile_photo')->nullable();
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('set null');
            $table->string('is_active',1)->default("1");
            $table->string('created_by', 11);
            $table->datetime('created_date');
            $table->datetime('modified_date')->useCurrent()->nullable();
            $table->string('modified_by', 11)->nullable();
            $table->rememberToken();
            $table->timestamp('email_verified_at')->nullable();
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
