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
        Schema::create('table_delete_logs', function (Blueprint $table) {
            $table->id();
            $table->string('table_name',60);
            $table->integer('pk_id');
            $table->text('json_row_data');
            $table->datetime('deleted_on');
            $table->string('is_recovered')->default(0);
            $table->string('created_by');
            $table->datetime('created_date');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_delete_logs');
    }
};
