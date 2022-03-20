<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Cliente;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categoria = Categoria::all();
        return view("categorias.index", compact("categoria"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("categorias.create");
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


        $Cat = new Categoria;
        $Cat->Nombre_Categoria= $request->Nombre_Categoria;
        //METODO SAVE PERMITE GUARDAR EL MODELO.
        $Cat->save();
        return redirect("/categorias")->with('status', 'Categoria Registrada!!');
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
        $cat = Categoria::findOrFail($id);
        return view("categorias.delete", compact("cat"));
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
        $cat = Categoria::findOrFail($id);
        return view("categorias.edit", compact("cat"));
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
        $cat = Categoria::findOrFail($id);
        $cat->update($request->all());
        return redirect("/categorias")->with('status', 'Categoria Actualizada!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat = Categoria::findOrFail($id);
        $cat->delete();
        return redirect("/categorias")->with('status', 'Categoria Eliminada!');
    }
}
