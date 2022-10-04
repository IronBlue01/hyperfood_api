<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardapioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cardapio', function (Blueprint $table) {
            $table->id('id_cardapio');
            $table->string('id_estabelecimento');
            $table->string('tipo');
            $table->string('nome');
            $table->string('unidade_medida');
            $table->string('peso');
            $table->string('volume');
            $table->decimal('valor_custo',5,2);
            $table->decimal('valor_venda',5,2);
            $table->integer('desconto');
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
        Schema::dropIfExists('cardapio');
    }
}
