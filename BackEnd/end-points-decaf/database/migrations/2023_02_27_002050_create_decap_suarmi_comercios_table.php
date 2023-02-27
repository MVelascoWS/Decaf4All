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
        Schema::create('decap_suarmi_comercios', function (Blueprint $table) {
            $table->id();
            $table->text('siteLogo');
            $table->text('nameBusiness');
            $table->string('urlNegocio');
            $table->string('nameOwner');
            $table->string('email');
            $table->integer('contactNumber');
            $table->integer('cpBusiness');
            $table->string('calleAvenida');
            $table->integer('noExteriorComercio');
            $table->string('paisBusiness');
            $table->string('estadoBusiness');
            $table->string('coloniaBusiness');
            $table->string('cordenadas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('decap_suarmi_comercios');
    }
};
