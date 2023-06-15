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
        Schema::create('album', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome_album')->nullable(false);
            $table->string('imagem_algum');
            $table->date('data_lancamento');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('album');
    }
};
