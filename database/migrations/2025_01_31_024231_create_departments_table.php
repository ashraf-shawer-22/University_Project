<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('departments', function (Blueprint $table) {
        $table->bigIncrements('department_id');
        $table->enum('department_name', ['Computer Science', 'Information System', 'Artificial Intelligence', 'Bioinformatics']);
        $table->string('head_of_department')->nullable();
        $table->timestamps();
    });

}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departments');
    }
};
