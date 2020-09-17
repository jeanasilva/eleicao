<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->unsignedBigInteger('id_pessoa');
            $table->unsignedBigInteger('id_chapa');
            $table->date('dt_nascimento');
            $table->string('telefone');
            $table->string('endereco');
            $table->string('bairro');
            $table->string('cidade');
            $table->enum('sexo', ['F', 'M']);
            $table->string('estado');
            $table->string('pais');
            $table->timestamps();

            $table->foreign('id_pessoa')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pessoas');
    }
}
