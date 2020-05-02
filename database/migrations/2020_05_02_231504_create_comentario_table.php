<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComentarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentario', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('usuario_id')->unsigned();
            $table->foreign('usuario_id', 'fk_comentario_tipo')->references('id')->on('usuario')->onDelete('restrict')->onUpdate('restrict');
            $table->bigInteger('producto_id')->unsigned();
            $table->foreign('producto_id', 'fk_comentario_producto')->references('id')->on('producto')->onDelete('restrict')->onUpdate('restrict');
            $table->string('comentario', 200);
            $table->tinyInteger('calificacion');
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
        Schema::dropIfExists('comentario');
    }
}
