<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleVentaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_venta', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('venta_id')->unsigned();
            $table->foreign('venta_id', 'fk_producto_venta')->references('id')->on('venta')->onDelete('restrict')->onUpdate('restrict');
            $table->bigInteger('producto_id')->unsigned();
            $table->foreign('producto_id', 'fk_producto_producto')->references('id')->on('producto')->onDelete('restrict')->onUpdate('restrict');
            $table->integer('cantidad');
            $table->decimal('precio');
            $table->decimal('descuento');
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
        Schema::dropIfExists('detalle_venta');
    }
}
