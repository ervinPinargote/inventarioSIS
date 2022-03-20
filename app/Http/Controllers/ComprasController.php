<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articulo;
use App\Categoria;
use App\Promocione;
use App\Proveedor;
use App\Compra;

class ComprasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $proveedor = Proveedor::all();
        $articulo = Articulo::all();
        $categoria = Categoria::all();
        $promociones = Promocione::all();
        $compras = Compra::all();
        return view("compras.index", compact("articulo", "categoria","promociones","proveedor","compras"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //
        $proveedores = Proveedor::all();
        $categoria = Categoria::all();
        $promociones = Promocione::all();
        #$compras = Compra::
        $compras = Compra::latest('id')->first(); # me permite obtener el ultimo registro ingresado  a la base de datos.

        ## SCRIPT GENERACION CODIGO_COMPRAS
        $cod = (($compras->id)+1)+10000;

        return view("compras.create", compact("proveedores","categoria","promociones", "cod"));
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
        $compra = new Compra;
        $compra->codigo_compra= $request->codigo_compra;
        $compra->referencia= $request->referencia;
        $compra->fecha= $request->fecha;
        $compra->subtotal= $request->subtotal;
        $compra->iva= $request->iva;
        $compra->valor_total = $request->valor_total;
        $compra->estado = 1;
        $compra->id_proveedor = $request->id_proveedor;
        //METODO SAVE PERMITE GUARDAR EL MODELO.
        $compra->save();
        return redirect("/compras")->with('status', 'Compra Registrado!!');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    }
}
