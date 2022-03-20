@extends("../layouts.plantilla")

@section('tittle_pincipal')
    <li class="active">Categorias</li>
@endsection

@section('tittle_sub')
    <h1 class="page-header">Marcas Articulos</h1>
@endsection


@section('Menu_lateral')

    <li ><a href="{{ route('inicio') }}"><em class="fa fa-home">&nbsp;</em> Menu Principal</a></li>
    <li class="active"><a href="{{ route('categorias.index') }}"><em class="fa fa-star">&nbsp;</em>Categorias</a></li>
    <li ><a href="{{ route('promociones.index') }}"><em class="fa fa-star">&nbsp;</em> Promociones</a></li>
    <li ><a href="{{ route('articulos.index') }}"><em class="fa fa-tag">&nbsp;</em> Artículos</a></li>
    <li><a href="{{ route('compras.index') }}">Compra Mercaderia</a></li>
    <li><a href="login.html"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>

@endsection



@section('tittle_fun')
    <b></b>Listado de Marcas  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a class="btn btn-success" onclick="abrirmodal('{{ url ("/marcas/create")}}');" title="Nuevo"><i class=""></i> Agregar </a>
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
            @if($marca)
                @foreach($marca as $cat)
                     <tr>
                        <td>{{ $cat->id }}</td>
                        <td>{{ $cat->Nombre_Marca }}</td>
                        <td>
                            <a CLASS="btn btn-primary" title="Modificar"  onclick="abrirmodal('{{ route('marcas.edit', $cat->id) }}');" ><i class="fa fa-pencil"></i> </a>
                        </td>
                         <td>
                             <a class="btn btn-danger" onclick="abrirmodal('{{ route('marcas.show',$cat->id) }}');" title="Eliminar"><i class="fa fa-trash-o"></i> </a>
                         </td>
                     </tr>
                @endforeach
            @else
                No hay registros que Mostrar!!!!
            @endif
        </tbody>
    </table>
@endsection
