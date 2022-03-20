@extends("../layouts.plantilla")

@section('tittle_pincipal')
    <li class="active">Proveedores</li>
@endsection

@section('tittle_sub')
    <h1 class="page-header">Menú Proveedores</h1>
@endsection

@section('Menu_lateral')

    <li ><a href="{{ route('inicio') }}"><em class="fa fa-home">&nbsp;</em> Menu Principal</a></li>
    <li class="active" ><a href="{{ route('proveedores.index') }}"><em class="fa fa-users">&nbsp;</em> Proveedores</a></li>

    <li><a href="login.html"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
@endsection


@section('tittle_fun')
    <b></b>Listado de Proveedores  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a class="btn btn-success" onclick="abrirmodal('{{ url ("/proveedores/create")}}');" title="Nuevo"><i class=""></i> Agregar </a>
@endsection



@section('content_dinamic')

    <table class="table table-bordered" id="datatable">
        <thead>
            <tr>
                <td>Ruc</td>
                <td>Empresa</td>
                <td>Correo</td>
                <td>Direccion</td>
                <td>Telefono</td>
                <td>Observaciones</td>
                <td>Editar</td>
                <td>Borrar</td>
            </tr>
        </thead>

        <tbody>
            @if($client)
                @foreach($client as $clientes)
                     <tr>
                        <td>{{ $clientes->ruc }}</td>
                        <td>{{ $clientes->nombre_empresa }}</td>
                        <td>{{ $clientes->correo}}</td>
                        <td>{{ $clientes->direcion}}</td>
                        <td>{{ $clientes->telefono}}</td>
                        <td>{{ $clientes->observaciones}}</td>
                        <td>
                            <a CLASS="btn btn-primary" title="Modificar"  onclick="abrirmodal('{{ route('proveedores.edit',$clientes->id) }}');" ><i class="fa fa-pencil"></i> </a>
                        </td>
                         <td>
                             <a class="btn btn-danger" onclick="abrirmodal('{{ route('proveedores.show',$clientes->id) }}');" title="Eliminar"><i class="fa fa-trash-o"></i> </a>
                         </td>
                     </tr>
                @endforeach
            @else
                No hay registros que Mostrar!!!!
            @endif
        </tbody>
    </table>
@endsection
