<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoFotoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_foto', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('producto_id')->unsigned();
            $table->foreign('producto_id', 'fk_productofoto_producto')->references('id')->on('producto')->onDelete('restrict')->onUpdate('restrict');
            $table->string('foto_delantera', 50);
            $table->string('foto_trasera', 50);
            $table->string('foto_derecha', 50);
            $table->string('foto_izquierda', 50);
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
        Schema::dropIfExists('producto_foto');
    }
}
