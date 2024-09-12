<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->comment('Tabela de produtos disponíveis para venda');
            $table->id()->comment('Identificador único do produto');
            $table->string('nome')->comment('Nome do produto');
            $table->text('descricao')->nullable()->comment('Descrição detalhada do produto');
            $table->decimal('preco', 8, 2)->comment('Preço do produto');
            $table->integer('estoque')->comment('Quantidade de unidades disponíveis em estoque');
            $table->foreignId('categoria_id')->constrained('categorias')->onDelete('cascade')->comment('Chave estrangeira para a categoria do produto');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
