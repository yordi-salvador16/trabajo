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
        Schema::create('libro_categoria', function (Blueprint $table) {
            $table->unsignedBigInteger('libro_id');
            $table->unsignedBigInteger('categoria_id');
            $table->foreign('libro_id')->references('id')->on('libros');
            $table->foreign('categoria_id')->references('id')->on('categorias');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libro_categoria');
    }
};
