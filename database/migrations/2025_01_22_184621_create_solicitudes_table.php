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
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('material_id')
                    ->constrained('materiales')
                    ->onDelete('cascade');
            $table->foreignId('usuario_id')
                    ->constrained('usuarios')
                    ->onDelete('cascade');
            $table->integer('cantidad');
            $table->string('medida');
            $table->string('comentario')->nullable();
            $table->enum('entrega', ['D', 'L']);
            $table->string('atendido');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicitudes');
    }
};
