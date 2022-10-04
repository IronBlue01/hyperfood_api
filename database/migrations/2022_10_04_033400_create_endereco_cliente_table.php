<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnderecoClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('endereco_cliente', function (Blueprint $table) {
            $table->id('id_endereco_cliente');
            $table->integer('id_cliente');
            $table->integer('id_estabelecimento');
            $table->string('cep');
            $table->string('cidade');
            $table->string('bairro');
            $table->string('logradouro');
            $table->integer('numero');
            $table->string('complemento');
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
        Schema::dropIfExists('endereco_cliente');
    }
}
