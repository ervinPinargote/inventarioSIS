@extends("../layouts.plantilla")

@section('tittle_pincipal')
    <li class="active">Promociones</li>
@endsection

@section('tittle_sub')
    <h1 class="page-header">Menú Promociones</h1>
@endsection


@section('Menu_lateral')

    <li ><a href="{{ route('inicio') }}"><em class="fa fa-home">&nbsp;</em> Menu Principal</a></li>
    <li ><a href="{{ route('categorias.index') }}"><em class="fa fa-star">&nbsp;</em>Categorias</a></li>
    <li class="active"><a href="{{ route('promociones.index') }}"><em class="fa fa-star">&nbsp;</em> Promociones</a></li>
    <li ><a href="{{ route('articulos.index') }}"><em class="fa fa-tag">&nbsp;</em> Artículos</a></li>
    <li><a>Compra Mercaderia</a></li>
    <li><a href="login.html"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>

@endsection



@section('tittle_fun')
    <b></b>Listado de Promociones  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a class="btn btn-success" onclick="abrirmodal('{{ url ("/promociones/create")}}');" title="Nuevo"><i class=""></i> Agregar </a>
@endsection


@section('content_dinamic')

    <table class="table table-bordered" id="datatable">
        <thead>
            <tr>
                <td>indice</td>
                <td>Tipo Promocion</td>
                <td>Porcentaje Descuento</td>
                <td>Editar</td>
                <td>Eliminar</td>
            </tr>
        </thead>

        <tbody>
            @if($promociones)
                @foreach($promociones as $pro)
                     <tr>
                        <td>{{ $pro->id }}</td>
                        <td>{{ $pro->detalle }}</td>
                        <td>{{ $pro->porcentaje}}</td>
                        <td>
                            <a CLASS="btn btn-primary" title="Modificar"  onclick="abrirmodal('{{ route('promociones.edit', $pro->id) }}');" ><i class="fa fa-pencil"></i> </a>
                        </td>
                         @if( $pro->id == 1)
                             <td>
                                 <a class="btn btn-default" style="pointer-events: none" onclick="abrirmodal('{{ route('promociones.show',$pro->id) }}');" title="Eliminar"><i class="fa fa-trash-o"></i> </a>
                             </td>
                         @else
                             <td>
                                 <a class="btn btn-danger" onclick="abrirmodal('{{ route('promociones.show',$pro->id) }}');" title="Eliminar"><i class="fa fa-trash-o"></i> </a>
                             </td>
                         @endif
                     </tr>
                @endforeach
            @else
                No hay registros que Mostrar!!!!
            @endif
        </tbody>
    </table>
@endsection
