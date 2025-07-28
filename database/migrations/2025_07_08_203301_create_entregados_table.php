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
        Schema::create('entregados', function (Blueprint $table) {
            $table->id();
            $table->foreignId('beneficiario_id')
                  ->constrained('beneficiarios')
                  ->onDelete('cascade');
            $table->foreignId('material_id')
                    ->constrained('materiales')
                    ->onDelete('cascade');
            $table->integer('cantidad');
            $table->string('medida');
            $table->enum('entrega', ['domicilio', 'local'])
                  ->default('local');
            $table->string('observaciones')->nullable();
            $table->string('atendido');
            $table->string('origen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entregados');
    }
};
