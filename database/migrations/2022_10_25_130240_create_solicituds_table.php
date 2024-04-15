<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicituds', function (Blueprint $table) {
            $table->id();
            $table->char('tipo_certificado',1);
            $table->string('nombre',80);
            $table->char('sexo',1);
            $table->string('correo',60);
            $table->string('telefono',10);
            $table->string('curp',18);
            $table->string('plan_estudios',40);
            $table->string('clave',15);
            $table->string('no_control',15);
            $table->string('promedio',5);
            $table->integer('creditos_totales');
            $table->string('fecha_inicio');
            $table->string('fecha_termino');
            $table->string('fecha_media_superior');
            $table->char('status',1)->default('0');

            $table->bigInteger('autor_id')->unsigned()->nullable();
            $table->foreign('autor_id')->references('id')->on('users');

            $table->bigInteger('validador_id')->unsigned()->nullable();
            $table->foreign('validador_id')->references('id')->on('users');

            $table->bigInteger('institucion_id')->unsigned()->nullable();
            $table->foreign('institucion_id')->references('id')->on('institucions');


            $table->bigInteger('jse_id')->unsigned()->nullable();
            $table->foreign('jse_id')->references('id')->on('users');

            $table->string('jse_no_certificado')->nullable();
            $table->string('jse_firma')->nullable();
            $table->string('jse_fecha_firma')->nullable();

            $table->bigInteger('dir_inst_id')->unsigned()->nullable();
            $table->foreign('dir_inst_id')->references('id')->on('users');

            $table->string('dir_inst_no_certificado')->nullable();
            $table->string('dir_inst_firma')->nullable();
            $table->string('dir_inst_fecha_firma')->nullable();

            $table->bigInteger('dir_gral_id')->unsigned()->nullable();
            $table->foreign('dir_gral_id')->references('id')->on('users');

            $table->string('dir_gral_no_certificado')->nullable();
            $table->string('dir_gral_firma')->nullable();
            $table->string('dir_gral__fecha_firma')->nullable();



            $table->date('fecha');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicituds');
    }
}
