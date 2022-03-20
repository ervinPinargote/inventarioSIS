@extends("../layouts.plantilla")

@section('tittle_pincipal')
    <li class="active">Categorias</li>
@endsection

@section('tittle_sub')
    <h1 class="page-header">Menú Categorías</h1>
@endsection


@section('Menu_lateral')

    <li ><a href="{{ route('inicio') }}"><em class="fa fa-home">&nbsp;</em> Menu Principal</a></li>
    <li class="active"><a href="{{ route('categorias.index') }}"><em class="fa fa-star">&nbsp;</em>Categorias</a></li>
    <li ><a href="{{ route('promociones.index') }}"><em class="fa fa-star">&nbsp;</em> Promociones</a></li>
    <li ><a href="{{ route('articulos.index') }}"><em class="fa fa-tag">&nbsp;</em> Artículos</a></li>
    <li><a href="{{ route('compras.index') }}">Compra Mercaderia</a></li>
    <li><a href="{{ route('marcas.index') }}">Marcas</a></li>


    <li><a href="login.html"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>

@endsection



@section('tittle_fun')
    <b></b>Listado de Categorías  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a class="btn btn-success" onclick="abrirmodal('{{ url ("/categorias/create")}}');" title="Nuevo"><i class=""></i> Agregar </a>
@endsection


@section('content_dinamic')

    <table class="table table-bordered" id="datatable">
        <thead>
            <tr>
                <td>indice</td>
                <td>Nombre Categoria</td>
                <td>Editar</td>
                <td>Eliminar</td>
            </tr>
        </thead>

        <tbody>
            @if($categoria)
                @foreach($categoria as $cat)
                     <tr>
                        <td>{{ $cat->idCategoria }}</td>
                        <td>{{ $cat->Nombre_Categoria }}</td>
                        <td>
                            <a CLASS="btn btn-primary" title="Modificar"  onclick="abrirmodal('{{ route('categorias.edit', $cat->idCategoria) }}');" ><i class="fa fa-pencil"></i> </a>
                        </td>
                         <td>
                             <a class="btn btn-danger" onclick="abrirmodal('{{ route('categorias.show',$cat->idCategoria) }}');" title="Eliminar"><i class="fa fa-trash-o"></i> </a>
                         </td>
                     </tr>
                @endforeach
            @else
                No hay registros que Mostrar!!!!
            @endif
        </tbody>
    </table>
@endsection
