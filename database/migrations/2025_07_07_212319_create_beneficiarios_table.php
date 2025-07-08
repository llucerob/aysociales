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
        Schema::create('beneficiarios', function (Blueprint $table) {
            $table->id();
            $table->string('rut')->unique();
            $table->string('nombres');
            $table->string('apellidos');
            $table->foreignId('rsh_id')->constrained('rshs')->onDelete('cascade');
            $table->string('direccion')->nullable();
            $table->string('sector');
            $table->string('telefono')->nullable();
            $table->string('correo')->nullable();
            $table->string('fecha_nacimiento');
            $table->integer('grupofamiliar')->default(0);
            $table->string('comentario')->nullable();
            $table->enum('estado', ['vivo', 'fallecido'])->default('vivo');  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beneficiarios');
    }
};
