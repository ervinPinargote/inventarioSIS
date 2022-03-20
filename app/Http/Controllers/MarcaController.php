<?php

namespace App\Http\Controllers;

use App\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $marca = Marca::all();
        return view("marcas.index", compact("marca"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view("marcas.create");

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


        $marca = new Marca();
        $marca->Nombre_Marca= $request->Nombre_Marca;

        //METODO SAVE PERMITE GUARDAR EL MODELO.
        $marca->save();
        return redirect("/marcas")->with('status', 'Cliente Registrado!!');
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
        $marca = Marca::findOrFail($id);
        return view("marcas.delete", compact("marca"));
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

        $marca = Marca::findOrFail($id);
        return view("marcas.edit", compact("marca"));

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
        $marca = Marca::findOrFail($id);
        $marca->update($request->all());
        return redirect("/marcas")->with('status', 'Cliente Actualizado!');


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
        $marca = Marca::findOrFail($id);
        $marca->delete();
        return redirect("/marcas")->with('status', 'Cliente Eliminado!');
    }
}
