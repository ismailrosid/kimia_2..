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
        Schema::create('tb_postingan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('tb_users')->onDelete('cascade');
            $table->string('image'); // Assuming you store the image path as a string
            $table->text('description'); // Text type for the description
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_postingan');
    }
};
