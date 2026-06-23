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
    Schema::create('i_d_cards', function (Blueprint $table) {
        $table->id();

        $table->string('card_no')->unique();

        $table->foreignId('student_id')
              ->nullable()
              ->constrained()
              ->nullOnDelete();

        $table->foreignId('teacher_id')
              ->nullable()
              ->constrained()
              ->nullOnDelete();

        $table->foreignId('guardian_id')
              ->nullable()
              ->constrained()
              ->nullOnDelete();

        $table->date('issue_date');

        $table->date('expiry_date')->nullable();

        $table->string('qr_code')->nullable();

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
        Schema::dropIfExists('i_d_cards');
    }
};
