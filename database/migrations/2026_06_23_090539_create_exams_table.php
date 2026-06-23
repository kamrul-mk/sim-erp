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
    Schema::create('exams', function (Blueprint $table) {
        $table->id();

        $table->foreignId('academic_year_id')
              ->nullable()
              ->constrained()
              ->nullOnDelete();

        $table->foreignId('exam_type_id')
              ->constrained()
              ->cascadeOnDelete();

        $table->string('name');

        $table->date('start_date')->nullable();
        $table->date('end_date')->nullable();

        $table->integer('total_marks')->default(100);
        $table->integer('pass_marks')->default(33);

        $table->boolean('result_published')->default(false);

        $table->text('description')->nullable();

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exams');
    }
};
