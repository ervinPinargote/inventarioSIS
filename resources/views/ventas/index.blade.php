@extends("../layouts.plantilla")

@section('tittle_pincipal')
    <li class="active">Modulos Ventas</li>
@endsection

@section('tittle_sub')
    <h1 class="page-header">Modulos Ventas</h1>
@endsection


@section('Menu_lateral')

    <li class="active"><a href="{{ route('ventas.index') }}"><em class="fa fa-home">&nbsp;</em> Menu Principal</a></li>
    <li ><a href="{{ route('categorias.index') }}"><em class="fa fa-star">&nbsp;</em>Estados de Ventas</a></li>
    <li ><a href="{{ route('promociones.index') }}"><em class="fa fa-star">&nbsp;</em> Promociones</a></li>
    <li ><a href="{{ route('articulos.index') }}"><em class="fa fa-tag">&nbsp;</em> Artículos</a></li>
    <li><a href="login.html"><em class="fa fa-power-off">&nbsp;</em> Salir</a></li>

@endsection



@section('tittle_fun')
    <b></b>Lista de Ventas  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a class="btn btn-success" onclick="abrirmodal('{{ url ("/ventas/create")}}');" title="Nuevo"><i class=""></i> Agregar </a>
    <a class="btn btn-success" href="{{route('reporteInventario')}}" title="Nuevo"><i class=""></i> PDF </a>
@endsection


@section('content_dinamic')

    <table class="table table-bordered" id="datatable">
        <thead>
            <tr>
                <td>Ord.</td>
                <td>Fecha Venta</td>
                <td>Codigo Venta</td>
                <td>Cedula Cliente</td>
                <td>Cliente</td>
                <td>Vendedor</td>
                <td>Valor</td>
                <td>Acciones</td>
            </tr>
        </thead>

        <tbody>
            @if($ventasclientes)
                @foreach($ventasclientes as $cp)
                      <tr>
                          <td>{{ $cp->id }}</td>
                          <td>{{ $cp->created_at}}</td>
                          <td>{{ $cp->codigo_venta }}</td>
                          <td>{{ $cp->clced }}</td>
                          <td>{{ $cp->clnomb }} {{ $cp->clape }}</td>
                          <td>{{ $cp->vnomb }} {{ $cp->vape }}</td>
                          <td>$ 0.00 </td>
                          <td>
                            <a CLASS="btn btn-primary" title="Items"  onclick="" ><i class="fa fa-plus"></i> </a>
                            <a CLASS="btn btn-primary" title="Modificar"  onclick="" ><i class="fa fa-pencil"></i> </a>
                            <a class="btn btn-success" onclick="" title="ticket"><i class="fa fa-download" aria-hidden="true"></i> </a>
                            <a class="btn btn-danger" onclick="" title="Eliminar"><i class="fa fa-trash-o"></i> </a>
                          </td>
                      </tr>
                @endforeach
            @else
                No hay registros que Mostrar!!!!
            @endif
        </tbody>
    </table>
@endsection
