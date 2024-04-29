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
        Schema::create('client_contacts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_detail_id')->nullable();
            $table->foreign('client_detail_id')->references('id')->on('client_details')->onDelete('set null');
            $table->string('mobile', 10)->nullable();
            $table->string('eamil', 60)->nullable();
            $table->string('is_active', 1)->default("1")->nullable();
            $table->string('created_by', 11);
            $table->datetime('created_date');
            $table->string('modified_by', 11)->nullable();
            $table->datetime('modified_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_contacts');
    }
};
