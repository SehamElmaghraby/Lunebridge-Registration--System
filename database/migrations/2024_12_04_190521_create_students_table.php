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
        Schema::create('students', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->integer('student_id')->unique();
            $table->string('first_name');
            $table->string('last_name');
            // $table->string('email')->unique();
            // $table->decimal('gpa', 3, 2)->default(0.0)->change();
            // $table->integer('year_of_birth')->default(2000);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
