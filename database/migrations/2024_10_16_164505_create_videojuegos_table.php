<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('videojuegos', function (Blueprint $table) {
            $table->id(); 
            $table->string('titulo');
            $table->string('genero'); 
            $table->string('plataforma'); 
            $table->integer('anio_lanzamiento'); 
            $table->string('desarrollador'); 
            $table->decimal('precio', 8, 2); 
            $table->float('calificacion'); 
            $table->boolean('disponible'); 
            $table->date('fecha_publicacion'); 
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('videojuegos');
    }
};
