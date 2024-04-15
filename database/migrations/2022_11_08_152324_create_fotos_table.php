<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fotos', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('solicitud_id')->unsigned()->nullable();
            $table->foreign('solicitud_id')->references('id')->on('solicituds')->onDelete('cascade');

            $table->bigInteger('autor_id')->unsigned()->nullable();
            $table->foreign('autor_id')->references('id')->on('users');

            $table->string('foto',80);

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
        Schema::dropIfExists('fotos');
    }
}
