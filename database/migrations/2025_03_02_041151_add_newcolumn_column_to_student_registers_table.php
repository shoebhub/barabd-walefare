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
        Schema::table('student_registers', function (Blueprint $table) {
            //
            $table->json('guardian_image')->nullable();
            $table->string('religion')->nullable();
            $table->string('occupation')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('student_registers', function (Blueprint $table) {
            //
        });
    }
};
