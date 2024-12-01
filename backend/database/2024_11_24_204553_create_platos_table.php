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
        Schema::create('platos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion');
            $table->decimal('precio', 5, 2);
            $table->string('imagen_url')->nullable();
            $table->integer('cantidad')->default(420); // Cantidad en gramos
            $table->enum('tipo_comida', ['Principal', 'Vegetariano', 'Postre'])->default('Principal'); 
            $table->boolean('disponibilidad')->default(true); 
            $table->integer('proteinas')->nullable(); 
            $table->integer('calorias')->nullable();
            $table->integer('grasas')->nullable();
            $table->integer('carbohidratos')->nullable();
            // Ingredientes como un campo text
            $table->text('ingredientes')->nullable(); // Aquí almacenaremos los ingredientes como un texto largo
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('platos');
    }
};
