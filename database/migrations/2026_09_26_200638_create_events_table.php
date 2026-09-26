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
    Schema::create('events', function (Blueprint $table) {
    $table->id();
    
    // Relacionamento com Usuário
    $table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade');
    
    // Informações Básicas
    $table->string('title');
    $table->text('description')->nullable(); // 'text' para descrições longas
    $table->string('category')->nullable();
    
    // Localização
    $table->string('location')->nullable();
    $table->string('address')->nullable();
    $table->string('city')->nullable();
    $table->string('state', 2)->nullable(); // 2 caracteres para a sigla (ex: SP, RJ)
    
    // Datas e Mídia
    $table->dateTime('starts_at')->nullable();
    $table->dateTime('ends_at')->nullable();
    $table->string('image_path')->nullable(); // É bom ser nullable para eventos sem imagem
    
    // Status
    $table->string('status')->default('draft'); // Não precisa de nullable() se já tem default
    
    $table->timestamps();
});


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
