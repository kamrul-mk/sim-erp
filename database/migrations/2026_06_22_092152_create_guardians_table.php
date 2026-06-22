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
    Schema::create('guardians', function (Blueprint $table) {
        $table->id();

        $table->string('guardian_name');

        $table->string('father_name')->nullable();
        $table->string('mother_name')->nullable();

        $table->string('mobile')->unique();
        $table->string('alternative_mobile')->nullable();

        $table->string('email')->nullable();

        $table->string('occupation')->nullable();
        $table->decimal('monthly_income', 10, 2)->nullable();

        $table->string('nid_no')->nullable();

        $table->text('present_address')->nullable();
        $table->text('permanent_address')->nullable();

        $table->string('photo')->nullable();

        $table->boolean('status')->default(true);

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guardians');
    }
};
