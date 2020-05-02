<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->bigInteger('tipo_id')->unsigned();
            $table->foreign('tipo_id', 'fk_producto_tipo')->references('id')->on('tipo')->onDelete('restrict')->onUpdate('restrict');
            $table->bigInteger('marca_id')->unsigned();
            $table->foreign('marca_id', 'fk_producto_marca')->references('id')->on('marca')->onDelete('restrict')->onUpdate('restrict');
            $table->bigInteger('talla_id')->unsigned();
            $table->foreign('talla_id', 'fk_producto_talla')->references('id')->on('talla')->onDelete('restrict')->onUpdate('restrict');
            $table->bigInteger('genero_id')->unsigned();
            $table->foreign('genero_id', 'fk_producto_genero')->references('id')->on('genero')->onDelete('restrict')->onUpdate('restrict');
            $table->decimal('precio_normal');
            $table->decimal('precio_oferta')->nullable();
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
        Schema::dropIfExists('producto');
    }
}
