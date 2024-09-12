<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->comment('Tabela de usuários do sistema');
            $table->id()->comment('Identificador único do usuário');
            $table->string('nome')->comment('Nome completo do usuário');
            $table->string('email')->unique()->comment('Endereço de e-mail do usuário, deve ser único');
            $table->string('senha')->comment('Senha criptografada do usuário');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
