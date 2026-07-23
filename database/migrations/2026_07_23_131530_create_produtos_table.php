<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produtos', function (Blueprint $table) {
                $table->id();

                $table->string('codigo', 30)->unique();
                $table->string('nome', 150);
                $table->text('descricao')->nullable();

                $table->decimal('preco', 10, 2)->default(0);
                $table->integer('estoque')->default(0);
                $table->integer('estoque_minimo')->default(0);

                $table->string('unidade_medida', 10)->default('UN');

                $table->boolean('ativo')->default(true);

                $table->timestamps();
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
