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
        Schema::create('recruitments', function (Blueprint $table) {
            $table->id();
            $table->integer('ref_no')->index();
            $table->string('job_title', 60);
            $table->date('job_posted_date');
            $table->date('interview_date');
            $table->text('job_description');
            $table->integer('no_of_year_exp');
            $table->integer('no_of_vacancy');
            $table->string('is_active', 1)->default("1");
            $table->string('created_by', 11);
            $table->datetime('created_date');
            $table->datetime('modified_date')->useCurrent()->nullable();
            $table->string('modified_by', 11)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recruitments');
    }
};
