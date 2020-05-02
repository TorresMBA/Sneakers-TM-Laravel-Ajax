<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venta', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('cliente_id')->unsigned();
            $table->foreign('cliente_id', 'fk_venta_cliente')->references('id')->on('cliente')->onDelete('cascade')->onUpdate('cascade');
            $table->string('forma_pago', 50);
            $table->string('tipo_comprobante', 50);
            $table->integer('igv');
            $table->decimal('total');
            $table->datetime('fecha');
            $table->string('estado', 30);
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
        Schema::dropIfExists('venta');
    }
}
