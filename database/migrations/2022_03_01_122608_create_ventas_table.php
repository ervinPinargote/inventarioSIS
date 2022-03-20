<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->string('codigo_venta',15)->unique();
            $table->unsignedBigInteger("cliente_id");
            $table->unsignedBigInteger("vendedor_id");

            $table->foreign("cliente_id")->references("id")->on("clientes")
                ->onDelete("cascade")
                ->onUpdate("cascade");

            $table->foreign("vendedor_id")->references("id")->on("vendedors")
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
        Schema::dropIfExists('ventas');
    }
}
