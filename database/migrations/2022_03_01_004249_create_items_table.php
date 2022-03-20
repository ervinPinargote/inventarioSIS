<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->string('codigo',15)->unique();
            $table->text('nombre_item');
            $table->text('detalle_item');
            $table->string('color',30);
            $table->string('talla',4);
            $table->integer('cantidad');
            $table->double('precio_unitario');
            $table->unsignedBigInteger("categoria_id");
            $table->unsignedBigInteger("compra_id");

            $table->foreign("categoria_id")->references("idCategoria")->on("categorias")
                ->onDelete("cascade")
                ->onUpdate("cascade");

            $table->foreign("compra_id")->references("id")->on("compras")
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
        Schema::dropIfExists('items');
    }
}
