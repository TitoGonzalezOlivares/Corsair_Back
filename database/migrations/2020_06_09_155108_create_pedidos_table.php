<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->dateTime('Fecha_pedido', 0);
            $table->dateTime('Fecha_entrega', 0);
            $table->string('Nombre_recibe', 100);
            $table->double('costoT', 8, 2);
            $table->enum('EstatusEnvio', ['Pedido', 'Enviado', 'EnCamino', 'Lleganda']);
            $table->boolean('Pago');

            $table->unsignedBigInteger('producto_id');
            $table->unsignedBigInteger('cliente_id');
            $table->timestamps();

            $table->foreign('producto_id')->references('id')->on('productos');
            $table->foreign('cliente_id')->references('id')->on('clientes');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
