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
        Schema::create('student_registers', function (Blueprint $table) {
            $table->id();
            $table->date('date')->nullable();
            $table->string('name')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->date('dob')->nullable();
            $table->string('mob_no')->nullable();
            $table->string('email')->nullable();
            $table->string('nid_no')->nullable();
            $table->unsignedBigInteger('area_id')->nullable();
            $table->string('ward_no')->nullable();
            $table->string('thana')->nullable();
            $table->string('district')->nullable();
            $table->unsignedBigInteger('volunteer_type_id')->nullable();
            $table->json('image')->nullable();
            $table->json('nid_image')->nullable();
            $table->json('std_id_card_image')->nullable();
            $table->string('present_address')->nullable();
            $table->string('permanant_address')->nullable();
            $table->timestamps();
            $table->softDeletes();

            // Foreign keys
            $table->foreign('area_id')->references('id')->on('areas');
            $table->foreign('volunteer_type_id')->references('id')->on('volunteer_types');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_registers');
    }
};
