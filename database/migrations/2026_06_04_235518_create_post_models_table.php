<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->string('photo'); // Хранит путь к файлу, а не эмодзи
            $table->string('title');
            $table->string('seller');
            $table->decimal('price', 10, 2);
            $table->decimal('rating', 2, 1);
            $table->string('category');
            $table->text('description');

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};