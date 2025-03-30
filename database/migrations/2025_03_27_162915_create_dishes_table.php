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
        Schema::create('dishes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('description')->nullable();
            $table->decimal('price', 4, 2);
            $table->string('image_path')->nullable();
            $table->integer('grams')->default(420);
            $table->integer('calories');
            $table->integer('proteins');
            $table->integer('carbohydrates');
            $table->integer('fats');
            $table->integer('stock')->default(100);
            $table->longText('ingredients')->nullable();
            $table->enum('type_food', ['Vegetarian', 'Vegan', 'New', 'Special', 'Classic'])->default('Classic');
            $table->foreignId('created_by')->contrained('users');
            $table->foreignId('updated_by')->contrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dishes');
    }
};
