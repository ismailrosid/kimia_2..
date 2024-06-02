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
        Schema::create('tb_bookmarks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('tb_users')->onDelete('cascade');
            $table->foreignId('post_id')->constrained('tb_postingan')->onDelete('cascade');
            $table->timestamps();
            $table->unique(['user_id', 'post_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_bookmarks');
    }
};
