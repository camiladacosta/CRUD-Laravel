<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("nome");
            $table->string("cpf");
            $table->string("email");
            $table->string("nacionalidade");
            $table->string("telefone");
            //$table->string("endereco");
            //$table->foreignId("endereco_id")->constrained();
            $table->string("profissao");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cliente');
    }
};
