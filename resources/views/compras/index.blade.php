@extends("../layouts.plantilla")

@section('tittle_pincipal')
    <li class="active">Compras de Mercaderia</li>
@endsection

@section('tittle_sub')
    <h1 class="page-header">Compras de Mercaderia</h1>
@endsection


@section('Menu_lateral')

    <li ><a href="{{ route('inicio') }}"><em class="fa fa-home">&nbsp;</em> Menu Principal</a></li>
    <li ><a href="{{ route('categorias.index') }}"><em class="fa fa-star">&nbsp;</em>Categorias</a></li>
    <li ><a href="{{ route('promociones.index') }}"><em class="fa fa-star">&nbsp;</em> Promociones</a></li>
    <li ><a href="{{ route('articulos.index') }}"><em class="fa fa-tag">&nbsp;</em> Artículos</a></li>
    <li class="active"><a>Compra Mercaderia</a></li>
    <li><a href="{{ route('marcas.index') }}">Gestion Marcas</a></li>
    <li><a href="login.html"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>

@endsection



@section('tittle_fun')
    <b></b>Lista de compras  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a class="btn btn-success" onclick="abrirmodal('{{ url ("/compras/create")}}');" title="Nuevo"><i class=""></i> Agregar </a>
    <a class="btn btn-success" href="{{route('reporteInventario')}}" title="Nuevo"><i class=""></i> PDF </a>
@endsection


@section('content_dinamic')

    <table class="table table-bordered" id="datatable">
        <thead>
            <tr>
                <td>N. Compra</td>
                <td>Fecha Compra</td>
                <td>Numero de Factura</td>
                <td>Proveedor</td>
                <td>Sutotal</td>
                <td>Total</td>
                <td>Acciones</td>
            </tr>
        </thead>

        <tbody>
            @if($compras)
                @foreach($compras as $cp)
                      <tr>
                          <td>{{ $cp->codigo_compra }}</td>
                          <td>{{$cp->fecha}}</td>
                          <td>{{ $cp->referencia }}</td>
                          @foreach($proveedor as $pr)
                              @if($pr->id == $cp->id_proveedor)
                                  <td>{{ $pr->nombre_empresa}}</td>
                              @endif
                          @endforeach
                          <td>$ {{ $cp->subtotal}}</td>
                          <td>$ {{ $cp->valor_total}}</td>
                          <td>
                            <a CLASS="btn btn-primary" title="Agregar Items"  onclick="abrirmodal('{{ route('registrar_item',$cp->id) }}');" ><i class="fa fa-plus"></i> </a>

                            <a CLASS="btn btn-primary" title="Modificar"  onclick="" ><i class="fa fa-pencil"></i> </a>
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
