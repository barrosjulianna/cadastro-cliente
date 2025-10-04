<?php

use App\Models\Endereco;
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
        Schema::create(Endereco::TABLE, function (Blueprint $table) {
            $table->id(); 
            $table->foreignId('cliente_id')->constrained('clientes') ->cascadeOnDelete();     
            $table->string('logradouro', 150);
            $table->string('numero', 20);
            $table->string('cep', 20);
            $table->string('complemento', 100)->nullable();
            $table->string('bairro', 100);
            $table->string('cidade', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(Endereco::TABLE);
    }
};
