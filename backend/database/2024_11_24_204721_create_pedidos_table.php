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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_usuario'); // bigint unsigned
            $table->foreign('id_usuario')->references('id')->on('users');            
            $table->decimal('total', 10, 2);
            $table->enum('status', ['Pendiente', 'Completado', 'Fallido', 'Cancelado'])->default('Pendiente'); 
            $table->string('calle');
            $table->string('ciudad');
            $table->string('codigo_postal');
            $table->timestamp('fecha_entrega_estimada')->nullable();
            $table->timestamps();
        });
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
