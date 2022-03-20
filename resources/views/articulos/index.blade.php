@extends("../layouts.plantilla")

@section('tittle_pincipal')
    <li class="active">Artículos</li>
@endsection

@section('tittle_sub')
    <h1 class="page-header">Menú Artículos</h1>
@endsection


@section('Menu_lateral')

    <li ><a href="{{ route('inicio') }}"><em class="fa fa-home">&nbsp;</em> Menu Principal</a></li>
    <li ><a href="{{ route('categorias.index') }}"><em class="fa fa-star">&nbsp;</em>Categorias</a></li>
    <li ><a href="{{ route('promociones.index') }}"><em class="fa fa-star">&nbsp;</em> Promociones</a></li>
    <li class="active"><a href="{{ route('articulos.index') }}"><em class="fa fa-tag">&nbsp;</em> Artículos</a></li>
    <li><a>Compra Mercaderia</a></li>
    <li><a href="login.html"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>

@endsection



@section('tittle_fun')
    <b></b>Listado de Artículos  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a class="btn btn-success" onclick="abrirmodal('{{ url ("/articulos/create")}}');" title="Nuevo"><i class=""></i> Agregar </a>
    <a class="btn btn-success" href="{{route('reporteInventario')}}" title="Stock"><i class=""></i> PDF - Stock Articulos </a>
    <a class="btn btn-success" href="{{route('ReporteArticuloPromocion')}}" title="Promociones"><i class=""></i> PDF - Articulos en Promocion </a>
    <a class="btn btn-success" href="{{route('ReporteArticuloPrecio')}}" title="Precios"><i class=""></i> PDF - Precio Articulos </a>
@endsection


@section('content_dinamic')

    <table class="table table-bordered" id="datatable">
        <thead>
            <tr>
                <td>Código</td>
                <td>Descripción</td>
                <td>Color</td>
                <td>Talla</td>
                <td>Procedencia</td>
                <td>Categoría</td>
                <td>Cantidad</td>
                <td>Precio Unitario</td>
                <td>Precio de Venta</td>
                <td>Promoción</td>
                <td>Editar</td>
                <td>Borrar</td>
            </tr>
        </thead>

        <tbody>
            @if($articulo)
                @foreach($articulo as $art)


                  @if($art->promocion_id == 1)
                      <tr>
                          <td>{{ $art->Codigo }}</td>
                          <td>{{ $art->Nombre_Articulo }}</td>
                          <td>{{ $art->color}}</td>
                          <td>{{ $art->talla}}</td>
                          <td>{{ $art->procedencia}}</td>
                          @foreach($categoria as $catA)
                              @if($catA->idCategoria == $art->categoria_id)
                                  <td>{{ $catA->Nombre_Categoria}}</td>
                              @endif
                          @endforeach
                          <td>{{ $art->cantidad }}</td>
                          <td>{{$art->precio}}</td>
                          <td>{{$art->ventaPublico}}</td>

                          @foreach($promociones as $prom)
                              @if($prom->id == $art->promocion_id)
                                  <td>{{ $prom->detalle}}</td>
                              @endif
                          @endforeach

                          <td>
                              <a CLASS="btn btn-primary" title="Modificar"  onclick="abrirmodal('{{ route('articulos.edit',$art->id) }}');" ><i class="fa fa-pencil"></i> </a>
                          </td>
                          <td>
                              <a class="btn btn-danger" onclick="abrirmodal('{{ route('articulos.show',$art->id) }}');" title="Eliminar"><i class="fa fa-trash-o"></i> </a>
                          </td>
                      </tr>

                  @else
                      <tr style="background-color: orange">
                          <td>{{ $art->Codigo }}</td>
                          <td>{{ $art->Nombre_Articulo }}</td>
                          <td>{{ $art->color}}</td>
                          <td>{{ $art->talla}}</td>
                          <td>{{ $art->procedencia}}</td>
                          @foreach($categoria as $catA)
                              @if($catA->idCategoria == $art->categoria_id)
                                  <td>{{ $catA->Nombre_Categoria}}</td>
                              @endif
                          @endforeach
                          <td>{{ $art->cantidad }}</td>
                          <td>{{$art->precio}}</td>
                          <td>{{$art->ventaPublico}}</td>

                          @foreach($promociones as $prom)
                              @if($prom->id == $art->promocion_id)
                                  <td>{{ $prom->detalle}}</td>
                              @endif
                          @endforeach

                          <td>
                              <a CLASS="btn btn-primary" title="Modificar"  onclick="abrirmodal('{{ route('articulos.edit',$art->id) }}');" ><i class="fa fa-pencil"></i> </a>
                          </td>
                          <td>
                              <a class="btn btn-danger" onclick="abrirmodal('{{ route('articulos.show',$art->id) }}');" title="Eliminar"><i class="fa fa-trash-o"></i> </a>
                          </td>
                      </tr>

                  @endif


                @endforeach
            @else
                No hay registros que Mostrar!!!!
            @endif
        </tbody>
    </table>
@endsection
