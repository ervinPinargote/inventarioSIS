<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Vendedor;
use Illuminate\Http\Request;

class VendedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $client = Vendedor::all();
        return view("vendedores.index", compact("client"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("vendedores.create");
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
        $cliente = new Vendedor();
        $cliente->ci= $request->ci;
        $cliente->nombres= $request->nombres;
        $cliente->apellidos= $request->apellidos;
        $cliente->fecha_Nac= $request->fecha_Nac;
        $cliente->telefono= $request->telefono;
        $cliente->direccion = $request->direccion;
        $cliente->correo = $request->correo;
        $cliente->user_id= 1;
        //METODO SAVE PERMITE GUARDAR EL MODELO.
        $cliente->save();
        return redirect("/vendedores")->with('status', 'Vendedor Registrado!!');
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
        $client = Vendedor::findOrFail($id);
        return view("vendedores.delete", compact("client"));
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
        $client = Vendedor::findOrFail($id);
        return view("vendedores.edit", compact("client"));
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
        $client = Vendedor::findOrFail($id);
        $client->update($request->all());
        return redirect("/vendedores")->with('status', 'Cliente Actualizado!');
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
        $client = Vendedor::findOrFail($id);
        $client->delete();
        return redirect("/vendedores")->with('status', 'Cliente Eliminado!');
    }
}
