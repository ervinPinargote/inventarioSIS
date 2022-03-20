<?php

namespace App\Http\Controllers;

use App\Promocione;
use Illuminate\Http\Request;

class PromocionessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $promociones = Promocione::all();
        return view("promociones.index", compact("promociones"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("promociones.create");
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
        $pr = new Promocione();
        $pr->detalle= $request->detalle;
        $pr->porcentaje= $request->porcentaje;
        //METODO SAVE PERMITE GUARDAR EL MODELO.
        $pr->save();
        return redirect("/promociones")->with('status', 'Categoria Registrada!!');
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
        $pr = Promocione::findOrFail($id);
        return view("promociones.delete", compact("pr"));
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
        $pr = Promocione::findOrFail($id);
        return view("promociones.edit", compact("pr"));
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
        $pr = Promocione::findOrFail($id);
        $pr->update($request->all());
        return redirect("/promociones")->with('status', 'Categoria Actualizada!');
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
        $pr = Promocione::findOrFail($id);
        $pr->delete();
        return redirect("/promociones")->with('status', 'Categoria Eliminada!');
    }
}
