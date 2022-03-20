<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/rPlantilla/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/rPlantilla/datepicker3.css') }}" rel="stylesheet">
    <link href="{{ asset('css/rPlantilla/header_footer.css') }}" rel="stylesheet">
    <title>Reporte de Inventarios</title>
</head>
<body>

<header>
<div class="cols">
    <div class="col1">
        <img src="{{ asset('images/logo/logo.jpg') }}" style=" float: left;" width="100" height="50">

    </div>
    <div class="col2">
        <h4>Comercial “San Pedro”</h4>
        <h5>Ruc: 0701565475001</h5>
    </div>
  </div>
</header>


<h1 style="color: rgb(21, 22, 21); margin-left: 20%">Precio de Articulos</h1>


<table class="table" >
    <thead>
    <tr style="background-color: lightyellow">
        <td>Código</td>
        <td>Descripción</td>
        <td>Color</td>
        <td>Talla</td>
        <td>Precio Unitario</td>
        <td>Precio de Venta</td>
    </tr>
    </thead>

    <tbody>
    @if($producto)
        @foreach($producto as $art)
                <tr>
                    <td>{{ $art->Codigo }}</td>
                    <td>{{ $art->Nombre_Articulo }}</td>
                    <td>{{ $art->color}}</td>
                    <td>{{ $art->talla}}</td>
                    <td>$ {{$art->precio}}</td>
                    <td>$ {{$art->ventaPublico}}</td>
                </tr>
        @endforeach
    @else
        No hay registros que Mostrar!!!!
    @endif
    </tbody>
</table>
<br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

<div>
    <p>Fecha de Elaboracion: </p>
    <p>Generado por:</p>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <p>______________________________</p>
    <p>Sr. {{auth()->user()->name}}</p>
    <p>cc: {{auth()->user()->email}}</p>
</div>

<footer>
    <div class="cols">
        <div class="col3">
            <p> N. TELEFONO: 0959540405</p>
            <p> PROVINCIA: El Oro</p>

        </div>
        <div class="col4">
            <p> DIRECCION: Olmedo 11-57 y Guayas</p>
            <p> EMAIL: comercialsanpedro27@gmail.com</p>
        </div>
      </div>
</footer>
</body>
</html>
