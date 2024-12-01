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
        Schema::create('detalles_pedidos', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedBigInteger('id_plato'); // bigint unsigned
            $table->unsignedBigInteger('id_pedido'); // bigint unsigned
            $table->integer('cantidad');
            $table->decimal('precio_unitario', 5, 2); 
            $table->decimal('subtotal', 8, 2); 
            $table->timestamps();

            $table->foreign('id_plato')->references('id')->on('platos'); 
            $table->foreign('id_pedido')->references('id')->on('pedidos');  

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalles_pedidos');
    }

};
