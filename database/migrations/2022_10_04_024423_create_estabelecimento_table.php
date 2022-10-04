<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstabelecimentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estabelecimento', function (Blueprint $table) {
            $table->id('id_estabelecimento');
            $table->string('nome_estabelecimento');
            $table->string('tipo_estabelecimento');
            $table->boolean('status_atividade');
            $table->string('cnpj');
            $table->string('dominio_estabelecimento');
            $table->string('proprietario');
            $table->string('telefone');
            $table->string('whatsapp');
            $table->string('logo');
            $table->string('email');
            $table->string('instagram');
            $table->string('facebook');
            $table->string('tiktok');
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
        Schema::dropIfExists('estabelecimento');
    }
}
