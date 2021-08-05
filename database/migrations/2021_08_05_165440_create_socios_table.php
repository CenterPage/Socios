<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSociosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_socio');
            $table->string('url')->nullable();
            $table->string('num_placa');
            $table->string('nombre_asociacion');
            $table->string('expedicion')->nullable();
            $table->string('revalidacion')->nullable();
            $table->string('num_operacion');
            $table->string('vigencia_operacion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('socios');
    }
}
