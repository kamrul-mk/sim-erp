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
    Schema::create('certificates', function (Blueprint $table) {
        $table->id();

        $table->foreignId('student_id')
              ->constrained()
              ->cascadeOnDelete();

        $table->foreignId('certificate_template_id')
              ->constrained()
              ->cascadeOnDelete();

        $table->string('certificate_no')->unique();

        $table->date('issue_date');

        $table->string('pdf_file')->nullable();

        $table->boolean('is_verified')->default(true);

        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certificates');
    }
};
