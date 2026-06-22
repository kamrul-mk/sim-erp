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
    Schema::create('admissions', function (Blueprint $table) {
        $table->id();

        $table->foreignId('academic_year_id')->nullable()->constrained()->nullOnDelete();
        $table->foreignId('class_room_id')->nullable()->constrained()->nullOnDelete();
        $table->foreignId('section_id')->nullable()->constrained()->nullOnDelete();

        $table->string('application_no')->unique();

        $table->string('student_name');
        $table->string('student_name_bn')->nullable();

        $table->string('father_name');
        $table->string('mother_name');

        $table->date('date_of_birth')->nullable();

        $table->enum('gender', ['Male', 'Female', 'Other'])->default('Male');

        $table->string('mobile');
        $table->string('email')->nullable();

        $table->text('present_address')->nullable();
        $table->text('permanent_address')->nullable();

        $table->string('birth_certificate_no')->nullable();

        $table->string('photo')->nullable();

        $table->enum('status', [
            'pending',
            'approved',
            'rejected'
        ])->default('pending');

        $table->text('remarks')->nullable();

        $table->timestamp('approved_at')->nullable();

        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admissions');
    }
};
