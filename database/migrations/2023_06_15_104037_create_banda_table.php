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
        Schema::create('banda', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome')->nullable(false);
            $table->string('imagem_banda');
            $table->integer('n_albuns_criados');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banda');
    }
};
