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
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('recruitment_id')->nullable();
            $table->string('name');
            $table->string('mobile_no',60);
            $table->string('email',60)->unique();
            $table->string('qualifications');
            $table->date('interview_date');
            $table->text('address')->nullable();
            $table->text('remarks')->nullable();
            $table->text('resume_path')->nullable();
            $table->foreign('recruitment_id')->references('id')->on('recruitments')->onDelete('set null');
            $table->enum('status', ['open', 'progress', 'completed']);
            $table->string('is_active', 1)->default("1");
            $table->string('created_by', 11);
            $table->datetime('created_date');
            $table->datetime('modified_date')->useCurrent()->nullable();
            $table->string('modified_by', 11)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidates');
    }
};
