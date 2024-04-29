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
        Schema::create('company_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_category_id')->nullable();
            $table->unsignedBigInteger('district_id')->nullable();
            $table->unsignedBigInteger('state_id')->nullable();
            $table->string('code', 11);
            $table->string('name', 255)->index();
            $table->string('pan', 10)->index();
            $table->string('cin', 25);
            $table->string('gst', 15)->index();
            $table->string('street', 225);
            $table->string('area', 225);
            $table->string('town_village', 100);
            $table->string('pincode', 6);
            $table->foreign('company_category_id')->references('id')->on('company_categories')->onDelete('set null');
            $table->foreign('district_id')->references('id')->on('districts')->onDelete('set null');
            $table->foreign('state_id')->references('id')->on('states')->onDelete('set null');
            $table->string('is_active',1)->default("1")->nullable();
            $table->string('created_by',11);
            $table->datetime('created_date');
            $table->string('modified_by',11)->nullable();
            $table->datetime('modified_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_details');
    }
};
