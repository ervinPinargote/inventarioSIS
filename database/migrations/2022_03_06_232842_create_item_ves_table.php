<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemVesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_ves', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('cantidad');
            $table->double("precio_unitario");
            $table->unsignedBigInteger("articulo_id");
            $table->unsignedBigInteger("venta_id");

            $table->foreign("articulo_id")->references("id")->on("articulos")
                ->onDelete("cascade")
                ->onUpdate("cascade");

            $table->foreign("venta_id")->references("id")->on("ventas")
                ->onDelete("cascade")
                ->onUpdate("cascade");

        });
    }

    /**
     * Reverse the migrations.
     *v
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_ves');
    }
}
