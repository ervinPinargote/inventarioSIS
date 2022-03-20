<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('codigo_compra',5)->unique();
            $table->string('referencia',20)->unique();
            $table->date('fecha');
            $table->double('subtotal');
            $table->double('iva');
            $table->double('valor_total');
            $table->integer('estado');
            $table->unsignedBigInteger("id_proveedor");
            $table->foreign("id_proveedor")->references("id")->on("proveedors")
            ->onDelete("cascade")
            ->onUpdate("cascade");
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compras');
    }
}
