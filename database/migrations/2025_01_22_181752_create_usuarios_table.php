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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('rut');
            $table->string('nombres');
            $table->string('apellidos');
            $table->foreignId('registro_social_id')
                    ->constrained('registros_sociales')
                    ->onDelete('cascade');
            
            $table->integer('telefono')->nullable();
            $table->string('correo')->nullable();
            $table->string('fnac');
            $table->enum('fallecido',['V', 'F']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
