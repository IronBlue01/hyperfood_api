<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido', function (Blueprint $table) {
            $table->id('id_pedido');
            $table->integer('id_cliente');
            $table->integer('id_estabelecimento');
            $table->integer('id_cardapio');
            $table->integer('id_endereco');
            $table->integer('id_plataforma');
            $table->integer('id_mesa');
            $table->string('identificador_pedido');
            $table->timestamp('data_criacao_pedido');
            $table->timestamp('data_finalizacao_pedido');
            $table->string('entregador');
            $table->integer('status_pedido');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedido');
    }
}
