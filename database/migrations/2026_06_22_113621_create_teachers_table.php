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
    Schema::create('teachers', function (Blueprint $table) {
        $table->id();

        // Basic Information
        $table->string('employee_id')->unique();
        $table->string('name');
        $table->string('name_bn')->nullable();

        $table->string('father_name')->nullable();
        $table->string('mother_name')->nullable();

        $table->date('date_of_birth')->nullable();

        $table->enum('gender', ['Male', 'Female', 'Other'])->default('Male');

        $table->string('blood_group')->nullable();
        $table->string('religion')->nullable();

        // Contact
        $table->string('mobile')->unique();
        $table->string('alternative_mobile')->nullable();
        $table->string('email')->nullable();

        // Address
        $table->text('present_address')->nullable();
        $table->text('permanent_address')->nullable();

        // Professional
        $table->string('designation');
        $table->date('joining_date')->nullable();

        $table->decimal('salary', 10, 2)->default(0);

        // Documents
        $table->string('nid_no')->nullable();
        $table->string('education_qualification')->nullable();

        // Photo
        $table->string('photo')->nullable();

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
        Schema::dropIfExists('teachers');
    }
};
