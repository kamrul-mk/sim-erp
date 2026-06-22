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
        $table->id();

        // Academic Information
        $table->foreignId('academic_year_id')->nullable()->constrained()->nullOnDelete();
        $table->foreignId('class_room_id')->nullable()->constrained()->nullOnDelete();
        $table->foreignId('section_id')->nullable()->constrained()->nullOnDelete();

        // Student IDs
        $table->string('admission_no')->unique();
        $table->string('roll_no')->nullable();
        $table->string('registration_no')->nullable();

        // Personal Information
        $table->string('name');
        $table->string('name_bn')->nullable();
        $table->string('father_name');
        $table->string('mother_name');
        $table->date('date_of_birth')->nullable();
        $table->enum('gender', ['Male', 'Female', 'Other'])->default('Male');
        $table->string('blood_group')->nullable();
        $table->string('religion')->nullable();

        // Contact Information
        $table->string('mobile')->nullable();
        $table->string('email')->nullable();

        // Address
        $table->text('present_address')->nullable();
        $table->text('permanent_address')->nullable();

        // Documents
        $table->string('birth_certificate_no')->nullable();
        $table->string('nid_no')->nullable();

        // Photo
        $table->string('photo')->nullable();

        // Admission
        $table->date('admission_date')->nullable();

        // Status
        $table->boolean('status')->default(true);

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
