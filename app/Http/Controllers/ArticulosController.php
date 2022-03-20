<?php

namespace App\Http\Controllers;

use App\Articulo;
use App\Categoria;
use App\Promocione;
use App\Proveedor;
use Illuminate\Http\Request;

class ArticulosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $articulo = Articulo::all();
        $categoria = Categoria::all();
        $promociones = Promocione::all();
        return view("articulos.index", compact("articulo", "categoria","promociones"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $proveedores = Proveedor::all();
        $categoria = Categoria::all();
        $promociones = Promocione::all();
        return view("articulos.create", compact("proveedores","categoria","promociones"));
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
        $articulo = new Articulo();
        $articulo->Codigo= $request->Codigo;
        $articulo->Nombre_Articulo= $request->Nombre_Articulo;
        $articulo->color= $request->color;
        $articulo->alto= 0;
        $articulo->ancho= 0;
        $articulo->talla= $request->talla;
        $articulo->cantidad= $request->cantidad;
        $articulo->procedencia = $request->procedencia;
        $articulo->categoria_id= $request->categoria_id;
        $articulo->proveedor_id= $request->proveedor_id;
        $articulo->precio= $request->precio;
        $articulo->porcentajeG= $request->porcentajeG;
        $articulo->promocion_id= $request->promocion_id;

        $val1=$request->precio;
        $val2 = $request->porcentajeG;
        $valG = (($val1*$val2)/100)+$val1;

        $articulo->ventaPublico= $valG;

        //METODO SAVE PERMITE GUARDAR EL MODELO.
        $articulo->save();
        return redirect("/articulos")->with('status', 'Articulo Registrada!!');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $cat = Articulo::findOrFail($id);
        return view("articulos.delete", compact("cat"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // envio los objetos con los que se van a trabajar en la vista
        $articulo = Articulo::findOrFail($id);
        $categoria = Categoria::all();
        $proveedor = Proveedor::all();
        $promociones = Promocione::all();
        return view("articulos.edit", compact("articulo", "categoria","proveedor","promociones"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $articulo = Articulo::findOrFail($id);



        $articulo->Nombre_Articulo= $request->Nombre_Articulo;
        $articulo->color= $request->color;
        $articulo->alto= 0;
        $articulo->ancho= 0;
        $articulo->talla= $request->talla;
        $articulo->cantidad= $request->cantidad;
        $articulo->procedencia = $request->procedencia;
        $articulo->categoria_id= $request->categoria_id;
        $articulo->proveedor_id= $request->proveedor_id;
        $articulo->precio= $request->precio;
        $articulo->porcentajeG= $request->porcentajeG;
        $articulo->promocion_id= $request->promocion_id;

        $val1=$request->precio;
        $val2 = $request->porcentajeG;
        $valG = (($val1*$val2)/100)+$val1;

        $articulo->ventaPublico= $valG;

        //METODO SAVE PERMITE GUARDAR EL MODELO.
        $articulo->save();


        //$cat->update($request1);
        return redirect("/articulos")->with('status', 'Articulo Actualizada!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $cat = Articulo::findOrFail($id);
        $cat->delete();
        return redirect("/articulos")->with('status', 'Articulo  Eliminada!');
    }
}
