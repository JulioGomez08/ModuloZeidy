<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateValidacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('validacions', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('solicitud_id')->unsigned()->nullable();
            $table->foreign('solicitud_id')->references('id')->on('solicituds')->onDelete('cascade');
            $table->boolean('validacion_nombre')->default('0');
            $table->boolean('validacion_tipo_certificado')->default('0');
            $table->boolean('validacion_documentos')->default('0');
            $table->boolean('validacion_periodos')->default('0');

            $table->string('discrepancia',80)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('validacions');
    }
}
