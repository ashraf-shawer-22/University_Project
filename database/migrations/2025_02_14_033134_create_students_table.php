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
            $table->bigIncrements('student_id'); // Auto-incrementing primary key
            $table->string('enroll_year');
            $table->decimal('gpa', 3, 2);
            $table->decimal('attendance_rate', 5, 2); // Added attendance_rate (percentage with 2 decimals)
            $table->unsignedBigInteger('department_id');
            $table->unsignedBigInteger('course_id');
            $table->timestamps();

            $table->foreign('department_id')->references('department_id')->on('departments')->onDelete('cascade');
            $table->foreign('course_id')->references('course_id')->on('courses')->onDelete('cascade');
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
