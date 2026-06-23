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
    Schema::create('marks', function (Blueprint $table) {
        $table->id();

        $table->foreignId('student_id')
              ->constrained()
              ->cascadeOnDelete();

        $table->foreignId('exam_id')
              ->constrained()
              ->cascadeOnDelete();

        $table->foreignId('subject_id')
              ->constrained()
              ->cascadeOnDelete();

        $table->decimal('marks_obtained', 5, 2)->default(0);

        $table->string('grade')->nullable();
        $table->decimal('gpa', 3, 2)->nullable();

        $table->string('remarks')->nullable();

        $table->timestamps();

        $table->unique([
            'student_id',
            'exam_id',
            'subject_id'
        ]);
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marks');
    }
};
