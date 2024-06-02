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
        Schema::create('tb_comment', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('tb_users')->onDelete('cascade'); // Foreign key untuk user
            $table->foreignId('post_id')->constrained('tb_postingan')->onDelete('cascade'); // Foreign key untuk postingan
            $table->text('comment'); // Kolom untuk menyimpan komentar
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_comment');
    }
};
