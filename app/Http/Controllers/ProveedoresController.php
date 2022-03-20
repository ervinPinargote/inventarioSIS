<?php

namespace App\Http\Controllers;

use App\Proveedor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class ProveedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $client = Proveedor::all();
        return view("proveedores.index", compact("client"));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("proveedores.create");
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
        $cliente = new Proveedor();
        $cliente->ruc= $request->ruc;
        $cliente->nombre_empresa= $request->nombre_empresa;
        $cliente->correo= $request->correo;
        $cliente->direcion= $request->direcion;
        $cliente->telefono= $request->telefono;
        $cliente->observaciones = $request->observaciones;

        //METODO SAVE PERMITE GUARDAR EL MODELO.
        $cliente->save();
        if (Route::current()->getName() == 'proveedores')
        {
            return redirect("/proveedores")->with('status', 'Proveedor Registrado!!');
        }
        else
        {
            return redirect("/compras")->with('status', 'Proveedor Registrado!!');
        }
       
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

        $client = Proveedor::findOrFail($id);
        return view("proveedores.delete", compact("client"));

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
        $client = Proveedor::findOrFail($id);
        return view("proveedores.edit", compact("client"));
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
        $client = Proveedor::findOrFail($id);
        $client->update($request->all());
        return redirect("/proveedores")->with('status', 'Proveedor Actualizado!');
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
        $client = Proveedor::findOrFail($id);
        $client->delete();
        return redirect("/proveedores")->with('status', 'Proveedor Eliminado!');
    }
}
