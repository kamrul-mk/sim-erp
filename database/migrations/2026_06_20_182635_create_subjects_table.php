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
    Schema::create('subjects', function (Blueprint $table) {
        $table->id();

        $table->string('name');

        $table->string('code')->unique();

        $table->enum('type', [
            'compulsory',
            'optional',
            'practical'
        ])->default('compulsory');

        $table->integer('full_marks')->default(100);

        $table->integer('pass_marks')->default(33);

        $table->integer('subject_order')->default(1);

        $table->text('description')->nullable();

        $table->boolean('status')->default(true);

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subjects');
    }
};
