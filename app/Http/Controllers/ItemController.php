<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Compra;
use App\Item;

class ItemController extends Controller
{
    //

     /**
     * Show the form for creating a new resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $id_compra = $id;

        // la vista create nos permite mostrar los datos redireige a un formulario.
        $categoria = Categoria::all();# envio todas las categorias para renderizarlas en el formulario.

        #$compras = Compra::
        $compras = Compra::findOrFail($id_compra); # obtengo los datos de la compra
        ## SCRIPT GENERACION CODIGO_COMPRAS
        $cod_deta = Item::latest('id')->first(); # me permite obtener el ultimo registro ingresado  a la base de datos.
        $cod = (($cod_deta->id)+1)+20000;
        return view("items_cp.create", compact("categoria","compras","cod"));
    }


     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $detalle_items = new Item();
        $detalle_items->codigo= $request->codigo;
        $detalle_items->nombre_item= $request->nombre_item;
        $detalle_items->detalle_item= $request->detalle_item;
        $detalle_items->color= $request->color;
        $detalle_items->talla = $request->talla;
        $detalle_items->cantidad= $request->cantidad;
        $detalle_items->precio_unitario= $request->precio_unitario;
        $detalle_items->categoria_id= $request->categoria_id;
        $detalle_items->compra_id= $request->compra_id;

        //METODO SAVE PERMITE GUARDAR EL MODELO.
        $detalle_items->save();
        return redirect("/compras")->with('status', 'Articulo Registrada!!');


    }

}
