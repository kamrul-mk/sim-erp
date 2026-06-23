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
    Schema::create('i_d_card_templates', function (Blueprint $table) {
        $table->id();

        $table->string('name');
        $table->string('code')->unique();

        $table->enum('card_type', [
            'student',
            'teacher',
            'guardian'
        ]);

        $table->string('logo')->nullable();

        $table->string('background_image')->nullable();

        $table->string('signature')->nullable();

        $table->text('header_text')->nullable();

        $table->text('footer_text')->nullable();

        $table->boolean('show_qr')->default(true);

        $table->boolean('status')->default(true);

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('i_d_card_templates');
    }
};
