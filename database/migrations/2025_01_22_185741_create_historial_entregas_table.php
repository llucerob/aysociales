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
        Schema::create('historial_entregas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('materiales_id')
                    ->constrained('materiales')
                    ->onDelete('cascade');
            $table->foreignId('usuario_id')
                    ->constrained('usuarios')
                    ->onDelete('cascade');
            $table->integer('cantidad');
            $table->string('medida');
            $table->string('comentario_solicitud')->nullable();
            $table->enum('entrega', ['D', 'L']);
            $table->strign('atendido');
            $table->enum('estado', ['Entregado', 'Devuelto']);
            $table->string('cerrado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historial_entregas');
    }
};
