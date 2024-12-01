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
        Schema::create('pagos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pedido'); // bigint unsigned
            $table->foreign('id_pedido')->references('id')->on('pedidos');  
            $table->decimal('monto', 10, 2); 
            $table->enum('metodo_pago', ['Tarjeta', 'Paypal', 'Transferencia'])->default('Paypal'); // Método de pago
            $table->enum('estado', ['Pendiente', 'Completado', 'Fallido', 'Cancelado'])->default('Pendiente'); // Estado del pago
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagos');
    }
};
