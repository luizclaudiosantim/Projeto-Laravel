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
        Schema::create('clientes', function (Blueprint $table) {
                    $table->id();

                    $table->string('nome', 150);
                    $table->string('email', 150)->nullable();
                    $table->string('telefone', 20)->nullable();
                    $table->string('documento', 20)->nullable();
                    $table->string('cidade', 100)->nullable();
                    $table->char('estado', 2)->nullable();

                    $table->boolean('ativo')->default(true);

                    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
