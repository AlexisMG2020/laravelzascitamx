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
        Schema::create('comercial_prospectos', function (Blueprint $table) {
            $table->increments('id')->primaryKey();
            $table->datetime('fecha');
            
            $table->integer('id_procedencia')->unsigned();
            $table->foreign('id_procedencia')->references('id')->on('comercial_procedencias');
            
            $table->string('razon_social');
            $table->string('nombre_comercial');
            $table->string('imagen');
            $table->string('giro_negocio');
            $table->string('contacto');
            $table->string('contacto_telefono');
            $table->string('contacto_correo');
            $table->string('direccion');
            $table->string('estado');            
            $table->string('latitud');
            $table->string('longitud');
            $table->string('mapa');
            $table->string('seguimiento');
            $table->string('estatus');
            // 
            $table->string('usuario_alta');
            
            $table->string('id_prospecto');
            $table->string('id_cliente')->nullable();
            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comercial_prospectos');
    }
};
