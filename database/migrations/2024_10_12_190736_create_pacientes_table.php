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
        Schema::create('pacientes', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('edad');
            $table->string('sexo');
            $table->string('cedula', 11)->unique();
            $table->string('tipo_sangre');
            $table->string('telefono', 10)->unique();
            $table->string('correo_electronico')->unique();
            $table->string('direccion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacientes');
    }
};
