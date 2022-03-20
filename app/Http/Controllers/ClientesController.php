<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $client = Cliente::all();
        return view("clientes.index", compact("client"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view("clientes.create");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Para insertar en la base de datos


        $cliente = new Cliente;
        $cliente->ci= $request->ci;
        $cliente->nombres= $request->nombres;
        $cliente->apellidos= $request->apellidos;
        $cliente->fecha_Nac= $request->fecha_Nac;
        $cliente->telefono= $request->telefono;
        $cliente->direccion = $request->direccion;
        $cliente->correo = $request->correo;
        //METODO SAVE PERMITE GUARDAR EL MODELO.
        $cliente->save();
        return redirect("/clientes")->with('status', 'Cliente Registrado!!');
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
        $client = Cliente::findOrFail($id);
        return view("clientes.delete", compact("client"));
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

        $client = Cliente::findOrFail($id);
        return view("clientes.edit", compact("client"));

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
        $client = Cliente::findOrFail($id);
        $client->update($request->all());
        return redirect("/clientes")->with('status', 'Cliente Actualizado!');


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
        $client = Cliente::findOrFail($id);
        $client->delete();
        return redirect("/clientes")->with('status', 'Cliente Eliminado!');
    }
}
