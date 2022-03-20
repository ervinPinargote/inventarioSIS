@extends("../layouts.plantilla_body")
@section('datos_user')
    @if (Auth::user())
        <div class="profile-usertitle-name">&nbsp;&nbsp;{{ Auth::user()->name }}</div>
        <div class="profile-usertitle-status"><span class="indicator label-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ Auth::user()->email }}</span></div>
    @else
        <div class="profile-usertitle-name">Iniciar Session</div>
        <div class="profile-usertitle-status"><span class="indicator label-success"></span></div>
    @endif
@endsection

@section('body_opciones')
    @if (Auth::user())
        <div class="col-md-6">
            <div class="panel panel-default ">
                <div class="panel-heading">
                    <a href="{{ route('clientes.index') }}">Módulo Clientes / Vendedores</a>
                    <span class="pull-right clickable panel-toggle panel-button-tab-left"><em
                            class="fa fa-toggle-up"></em></span>
                </div>
                <div class="panel-body">
                    <ul>
                        <li class="" style="list-style: none">
                            <span>1. Gestión de Clientes</span>
                        </li>
                        <li class="" style="list-style: none">
                            <span>2. Gestión de Vendedores</span>
                        </li>
                        <li class="" style="list-style: none">
                            <span>3. Rportes de Clientes</span>
                        </li>
                        <li class="" style="list-style: none">
                            <span>4. Reportes de Vendedores</span>
                        </li>
                        <!-- <li class="" style="list-style: none">
                        <i class="fa fa-trash-o fa-2x" aria-hidden="true"></i><span>Eliminar Clientes / Vendedores</span>
                    </li>
                    <li class="" style="list-style: none">
                        <i class="fa fa-filter fa-2x" aria-hidden="true"></i><span>Filtrar Clientes / Vendedores</span>
                    </li> -->
                    </ul>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{ route('proveedores.index') }}"> Módulo Gestion de Proveedores</a>
                    <span class="pull-right clickable panel-toggle panel-button-tab-left"><em
                            class="fa fa-toggle-up"></em></span>
                </div>
                <div class="panel-body">
                    <ul>
                        <li class="" style="list-style: none">
                            <span>1. Registrar de Proveedores</span>
                        </li>
                        <li class="" style="list-style: none">
                            <span>2. Editar Proveedores</span>
                        </li>
                        <li class="" style="list-style: none">
                            <span>3. Eliminar Proveedores</span>
                        </li>
                        <li class="" style="list-style: none">
                            <span>4. Filtrar Proveedores</span>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <!--/.col-->

        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">

                    <a href="{{ route('categorias.index') }}"> Módulo inventario</a>
                    <span class="pull-right clickable panel-toggle panel-button-tab-left"><em
                            class="fa fa-toggle-up"></em></span>
                </div>
                <div class="panel-body">

                    <ul>
                        <li class="" style="list-style: none">
                            <span>1. Gestión Categorias Articulos</span>
                        </li>
                        <li class="" style="list-style: none">
                            <span>2. Gestión Promociones Articulos</span>
                        </li>
                        <li class="" style="list-style: none">
                            <span>3. Gestión Compras Articulos</span>
                        </li>
                        <li class="" style="list-style: none">
                            <span>4. Filtrar categoria</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="panel panel-default ">
                <div class="panel-heading">
                    <a href="{{ route('ventas.index') }}"> Módulo Ventas</a>
                    <span class="pull-right clickable panel-toggle panel-button-tab-left"><em
                            class="fa fa-toggle-up"></em></span>
                </div>
                <div class="panel-body">
                    <ul>
                        <li class="" style="list-style: none">
                            <span>1. Gestion de ventas</span>
                        </li>
                        <li class="" style="list-style: none">
                            <span>2. Reportes de Ventas</span>
                        </li>
                        <li class="" style="list-style: none">
                            <span>3. Parte diario</span>
                        </li>
                        <li class="" style="list-style: none">
                            <span>4. Otros</span>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
        <!--/.col-->
    @else
    <div class="col-md-6">
        <div class="panel panel-default ">
        <div class="panel-heading">
            Mensaje
            <span class="pull-right clickable panel-toggle panel-button-tab-left"><em
                    class="fa fa-toggle-up"></em></span>
        </div>
        <div class="panel-body">
            Usted no tiene Privilegios en este Sitio.
            <p>1. Contactese con Administrador....</p>
            <p>2. Inicie Session para Continuar.... </p>
        </div>
        </div>
    </div>
    @endif
@endsection
