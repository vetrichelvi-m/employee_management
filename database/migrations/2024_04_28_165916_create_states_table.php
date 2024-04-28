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
            $table->string('name',60);
            $table->string('is_active',1)->default("1")->nullable();
            $table->string('created_by',11);
            $table->datetime('created_date');
            $table->datetime('modified_date')->useCurrent()->nullable();
            $table->string('modified_by',11)->nullable();
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
