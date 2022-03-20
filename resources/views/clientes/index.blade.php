@extends("../layouts.plantilla")

@section('tittle_pincipal')
    <li class="active">Clientes</li>
@endsection

@section('tittle_sub')
    <h1 class="page-header">Menú Clientes</h1>
@endsection


@section('Menu_lateral')

    <li ><a href="{{ route('inicio') }}"><em class="fa fa-home">&nbsp;</em> Menu Principal</a></li>
    <li class="active"><a href="{{ route('clientes.index') }}"><em class="fa fa-users">&nbsp;</em> Clientes</a></li>
    <li ><a href="{{ route('vendedores.index') }}"><em class="fa fa-users">&nbsp;</em> Vendedores</a></li>
    <li><a href="login.html"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>

@endsection



@section('tittle_fun')
    <b></b>Listado de Clientes  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a class="btn btn-success" onclick="abrirmodal('{{ url ("/clientes/create")}}');" title="Nuevo"><i class=""></i> Agregar </a>
@endsection


@section('content_dinamic')

    <table class="table table-bordered" id="datatable">
        <thead>
            <tr>
                <td>Ci/Ruc</td>
                <td>Nombres</td>
                <td>Apellidos</td>
                <td>Fecha Nacimiento</td>
                <td>Telefono</td>
                <td>Direccion</td>
                <td>Correo Electronico</td>
                <td>Editar</td>
                <td>Borrar</td>
            </tr>
        </thead>

        <tbody>
            @if($client)
                @foreach($client as $clientes)
                     <tr>
                        <td>{{ $clientes->ci }}</td>
                        <td>{{ $clientes->nombres }}</td>
                        <td>{{ $clientes->apellidos}}</td>
                        <td>{{ $clientes->fecha_Nac}}</td>
                        <td>{{ $clientes->telefono}}</td>
                        <td>{{ $clientes->direccion}}</td>
                        <td>{{ $clientes->correo }}</td>
                        <td>
                            <a CLASS="btn btn-primary" title="Modificar"  onclick="abrirmodal('{{ route('clientes.edit',$clientes->id) }}');" ><i class="fa fa-pencil"></i> </a>
                        </td>
                         <td>
                             <a class="btn btn-danger" onclick="abrirmodal('{{ route('clientes.show',$clientes->id) }}');" title="Eliminar"><i class="fa fa-trash-o"></i> </a>
                         </td>
                     </tr>
                @endforeach
            @else
                No hay registros que Mostrar!!!!
            @endif
        </tbody>
    </table>
@endsection
