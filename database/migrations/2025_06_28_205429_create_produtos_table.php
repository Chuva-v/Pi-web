<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations ok.
     */
    public function up()
    {
      Schema::create('produtos', function (Blueprint $table) {
        $table->id(); // ID único
        $table->string('name'); // Nome do produto
        $table->text('descricao')->nullable(); // Descrição detalhada
        $table->decimal('preco', 10, 2); // Preço com 2 casas decimais
        $table->string('image')->nullable(); // Caminho da imagem do produto
        $table->timestamps(); // created_at e updated_at
      });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
