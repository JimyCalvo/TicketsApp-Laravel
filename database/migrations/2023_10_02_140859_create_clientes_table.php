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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->('cedula')
            $table->nombre() varchar(3)
            $table->apellido() varchar(10 )
            $table->ciudad() varchar(10)
            $table->email() varchar(20)
            $table->direccion() varchar(20)
            $table->telefono() varchar(20)
            $table->fecha_nacimiento() varchar(20)
            $table->dependencia() varchar(20
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
