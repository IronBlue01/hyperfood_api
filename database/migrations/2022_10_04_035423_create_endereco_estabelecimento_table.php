<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnderecoEstabelecimentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('endereco_estabelecimento', function (Blueprint $table) {
            $table->id('id_endereco_estabelecimento');
            $table->integer('id_estabelecimento');
            $table->string('cep');
            $table->string('cidade');
            $table->string('logradouro');
            $table->string('bairro');
            $table->integer('numero');
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
        Schema::dropIfExists('endereco_estabelecimento');
    }
}
