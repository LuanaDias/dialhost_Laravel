<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitante extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitante', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 80);
            $table->string('email', 80);
            $table->string('telefone',15);
            $table->stribg('celular',15);
            $table->date('dtnascimento');
            $table->integer('cep');
            $table->string('logradouro', 80);
            $table->integer('numero');
            $table->string('complemento', 20);
            $table->string('bairro', 30);
            $table->string('cidade', 30);
            $table->string('uf', 2);
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
        Schema::dropIfExists('visitante');
    }
}
