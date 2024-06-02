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
        Schema::create('tb_like', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('tb_users')->onDelete('cascade'); // Foreign key untuk user
            $table->foreignId('post_id')->constrained('tb_postingan')->onDelete('cascade'); // Foreign key untuk postingan
            $table->timestamps();

            // Pastikan kombinasi user_id dan post_id unik untuk mencegah duplikat like
            $table->unique(['user_id', 'post_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_like');
    }
};
