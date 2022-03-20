<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Codigo',5)->unique();
            $table->string('Nombre_Articulo',50);
            $table->string('color',30);
            $table->string('talla',4);
            $table->integer('alto');
            $table->integer('ancho');
            $table->integer('cantidad');
            $table->unsignedBigInteger("categoria_id");
            $table->unsignedBigInteger("proveedor_id");

            $table->foreign("categoria_id")->references("idCategoria")->on("categorias")
                ->onDelete("cascade")
                ->onUpdate("cascade");


            $table->foreign("proveedor_id")->references("id")->on("proveedors")
                ->onDelete("cascade")
                ->onUpdate("cascade");


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
        Schema::dropIfExists('articulos');
    }
}
