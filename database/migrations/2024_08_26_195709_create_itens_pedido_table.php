<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItensPedidoTable extends Migration
{
    public function up()
    {
        Schema::create('itens_pedido', function (Blueprint $table) {
            $table->comment('Tabela de itens dos pedidos');
            $table->id()->comment('Identificador único do item do pedido');
            $table->foreignId('pedido_id')->constrained('pedidos')->onDelete('cascade')->comment('Chave estrangeira para o pedido ao qual o item pertence');
            $table->foreignId('produto_id')->constrained('produtos')->onDelete('cascade')->comment('Chave estrangeira para o produto relacionado');
            $table->integer('quantidade')->comment('Quantidade do produto no pedido');
            $table->decimal('preco', 8, 2)->comment('Preço unitário do produto no pedido');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('itens_pedido');
    }
}
