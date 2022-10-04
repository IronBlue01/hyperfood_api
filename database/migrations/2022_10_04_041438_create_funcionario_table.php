<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuncionarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionario', function (Blueprint $table) {
            $table->id('id_funcionario');
            $table->integer('id_estabelecimento');
            $table->integer('id_cargo');
            $table->string('tipo_contrato');
            $table->date('data_admicao');
            $table->string('nome');
            $table->string('nome_social');
            $table->string('estado_civil');
            $table->string('cpf');
            $table->string('rg');
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
        Schema::dropIfExists('funcionario');
    }
}
