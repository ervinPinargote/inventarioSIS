<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Venta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpKernel\Client;

class VentaController extends Controller
{
    //
 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ventasclientes = DB::table('ventas')
        ->join('clientes','clientes.id','=','ventas.cliente_id')
        ->join('vendedors', 'vendedors.id', '=', 'ventas.vendedor_id')
        ->select('ventas.*', 'clientes.ci as clced','clientes.nombres as clnomb', 'clientes.apellidos as clape','vendedors.nombres as vnomb','vendedors.apellidos as vape',)
        ->orderBy('ventas.id','DESC')
        ->get();
        return view("ventas.index", compact("ventasclientes"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ventas = Venta::latest('id')->first(); # me permite obtener el ultimo registro ingresado  a la base de datos.
        $clientes = Cliente::all();
        ## SCRIPT GENERACION CODIGO_COMPRAS

        if (!is_null($ventas)) {
            $cod = (($ventas->id)+1)+ 40000;
        }
        else
        {
            $cod = 1 + 40000;
        }

        return view("ventas.create", compact("ventas", "cod", "clientes"));
    }

      /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $opcionCliente = $request->opcioncliente;

       if(is_null($opcionCliente))
       {
        $venta = new Venta();
        $venta->codigo_venta= $request->codigo_venta;
        $venta->cliente_id= $request->cliente_id;
        $venta->vendedor_id= $request->vendedor_id;
        //METODO SAVE PERMITE GUARDAR EL MODELO.
        $venta->save();
       }
       else
       {
        $ced = $request->ci;
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

        /*$clienteGuardado =  DB::table('clientes')
        ->select('clientes.*',)
        ->where('ci','=', $ced)
        ->get();*/

        $clienteGuardado = Cliente::latest('id')->first();

        $venta = new Venta();
        $venta->codigo_venta= $request->codigo_venta;
        $venta->cliente_id=  $clienteGuardado->id;
        $venta->vendedor_id= $request->vendedor_id;
        //METODO SAVE PERMITE GUARDAR EL MODELO.
        $venta->save();
       }


        //PARA GUARDADAR UN VENTA.
        return redirect("/ventas")->with('status', 'Venta Registrado!!');
    }





}
