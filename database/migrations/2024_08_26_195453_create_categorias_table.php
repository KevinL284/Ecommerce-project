<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriasTable extends Migration
{
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->comment('Tabela de categorias dos produtos');
            $table->id()->comment('Identificador único da categoria');
            $table->string('nome')->comment('Nome da categoria');
            $table->text('descricao')->nullable()->comment('Descrição opcional da categoria');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('categorias');
    }
}
