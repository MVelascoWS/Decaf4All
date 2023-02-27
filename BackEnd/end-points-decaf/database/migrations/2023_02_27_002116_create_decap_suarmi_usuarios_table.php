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
        Schema::create('decap_suarmi_usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->date('fechaNacimiento');
            $table->string('nombre');
            $table->string('segundoNombre');
            $table->string('apellidoPaterno');
            $table->string('apellidoMaterno');
            $table->string('contraseña');
            $table->string('ocupacion');
            $table->string('paisNacionalidad');
            $table->integer('claveTelefono');
            $table->string('telefono');
            $table->string('calleAvenida');
            $table->string('colonia');
            $table->string('noExterior');
            $table->string('cp');
            $table->string('estado');
            $table->string('inePasaporte');
            $table->string('numeroIdentificacion');
            $table->string('fotoIdFrontalIne');
            $table->string('reversoIdIne');
            $table->string('selfie');
            $table->string('curpRfc');
            $table->string('clabe');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('decap_suarmi_usuarios');
    }
};
