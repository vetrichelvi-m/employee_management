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
        Schema::create('states', function (Blueprint $table) {
            $table->id();
            $table->string('name',255);
            $table->string('code',3);
            $table->string('is_active',1)->default("1")->nullable();
            $table->string('created_by',11);
            $table->datetime('created_date');
            $table->datetime('modified_date')->useCurrent()->nullable();
            $table->string('modified_by',11)->nullable();

            // $table->id();
            // $table->unsignedBigInteger('task_id');
            // $table->foreign('task_id')->references('id')->on('tasks')->onDelete('cascade');
            // $table->text('content');
            // $table->unsignedBigInteger('user_id');
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // $table->timestamps();

            // $table->id();
            // $table->string('title');
            // $table->text('description')->nullable();
            // $table->unsignedBigInteger('user_id')->nullable();
            // $table->enum('status', ['open', 'progress', 'completed'])->default('open');
            // $table->string('file')->nullable();
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('states');
    }
};
