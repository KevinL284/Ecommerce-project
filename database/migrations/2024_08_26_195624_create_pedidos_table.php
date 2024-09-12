<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->comment('Tabela de pedidos realizados pelos usuários');
            $table->id()->comment('Identificador único do pedido');
            $table->foreignId('usuario_id')->constrained('usuarios')->onDelete('cascade')->comment('Chave estrangeira para o usuário que fez o pedido');
            $table->decimal('preco_total', 8, 2)->comment('Preço total do pedido');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
