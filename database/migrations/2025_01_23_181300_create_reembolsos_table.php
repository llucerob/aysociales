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
        Schema::create('reembolsos', function (Blueprint $table) {
            $table->id();

            $table->foreignId('usuarios_id')
                    ->constrained('usuarios')
                    ->onDelete('cascade');
            $table->integer('cantidad')->default('0');
            $table->string('solicitud');
            $table->string('motivo');
            $table->string('tipoprestacion');
            $table->string('boleta');
            
            $table->enum('entregado', [4,3,2,1,0])->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reembolsos');
    }
};
