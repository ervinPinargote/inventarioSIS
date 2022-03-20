<?php

namespace App\Http\Controllers;

use App\Articulo;
use App\Categoria;
use App\Promocione;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    //
    public function PDF(){
        $pdf = \PDF::loadView('reportes.prueba');
        return $pdf->download('prueba.pdf');
    }

    public function PDFInventaro(){


        $producto = Articulo::all()
            ->sortBy('idCategoria');
        $categoria = Categoria::all();
        $promocione = Promocione::all();
        $inversion =0;
        $ganancia = 0;
        foreach ($producto as $pro)
        {
            $inversion = $inversion + ($pro->precio * $pro->cantidad );
            $ganancia = $ganancia + ($pro->ventaPublico * $pro->cantidad);
        }

        $pdf = \PDF::loadView('reportes.inventariospdf', compact('producto','categoria','promocione','inversion','ganancia'));
       // $pdf->set_paper("letter","landscape");
        $pdf->setPaper('P', 'portrait');

        return $pdf->download('Reporte_Inevntario.pdf');
    }

    public function PDFArticulosPromocion(){


        $producto = Articulo::all()
            ->sortBy('idCategoria')
            ->where('promocion_id','!=', '1');
        $categoria = Categoria::all();
        $promocione = Promocione::all();
        $inversion =0;
        $ganancia = 0;
        foreach ($producto as $pro)
        {
            $inversion = $inversion + ($pro->precio * $pro->cantidad );
            $ganancia = $ganancia + ($pro->ventaPublico * $pro->cantidad);
        }

        $pdf = \PDF::loadView('reportes.reporteartpromociones', compact('producto','categoria','promocione','inversion','ganancia'));
       // $pdf->set_paper("letter","landscape");
        $pdf->setPaper('P', 'portrait');

        return $pdf->download('Articulos_Promocion.pdf');
    }

    public function PDFArticulosPrecio(){


        $producto = Articulo::all()
            ->sortBy('idCategoria');
        $categoria = Categoria::all();
        $promocione = Promocione::all();
        $inversion =0;
        $ganancia = 0;
        foreach ($producto as $pro)
        {
            $inversion = $inversion + ($pro->precio * $pro->cantidad );
            $ganancia = $ganancia + ($pro->ventaPublico * $pro->cantidad);
        }

        $pdf = \PDF::loadView('reportes.reporteartprecios', compact('producto','categoria','promocione','inversion','ganancia'));
       // $pdf->set_paper("letter","landscape");
        $pdf->setPaper('P', 'portrait');

        return $pdf->download('Precio_Articulo.pdf');
    }




}
