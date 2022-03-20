<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SAN PEDRO-SYS</title>


    <!-- link de CSS -->

    <link href="{{ asset('css/rPlantilla/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/rPlantilla/font-awesome.min.css') }}" >
    <link href="{{ asset('css/rPlantilla/datepicker3.css') }}" rel="stylesheet">
    <link href="{{ asset('css/rPlantilla/styles.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--Custom Font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
<!--[if lt IE 9]>
	<script src="{{asset('js/rPlantilla/html5shiv.js')}}"></script>
	<script src="{{asset('js/rPlantilla/respond.min.js')}}"></script>
	<![endif]-->
</head>
<body>
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span></button>
            <a class="navbar-brand" href="#"><span>COMERCIAL -</span>San Pedro</a>
            <ul class="nav navbar-top-links navbar-right">
            </ul>
        </div>
    </div><!-- /.container-fluid -->
</nav>
<!-- bloke izquierdo de plantilla -->
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
        <div class="profile-userpic">
            <img src="{{ asset('images/logo/usericon.png') }}" class="img-responsive" alt="">
        </div>
        <div class="">
            @yield("datos_user")
        </div>
        <div class="clear"></div>
    </div>
    <div class="divider"></div>
    <form role="search">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
        </div>
    </form>
    <ul class="nav menu">
        @if (Auth::user())
        <li><a href="{{ Route('logout')}}"><em class="fa fa-power-off">&nbsp;</em> Cerrar Sesion</a></li>
        @else
        <li><a href="{{ Route('login')}}"><em class="fa fa-sign-in" aria-hidden="true">&nbsp;</em> Iniciar Sesion</a></li>
        @endif

    </ul>
</div><!--/.sidebar-->

<!-- Bloque de lado derecho de la pagina -->

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Inicio</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Menú Principal</h1>
        </div>
    </div><!--/.row-->

    <div class="row">
        @yield("body_opciones")
        <div class="col-sm-12">
            <p class="back-link">Coperyng @ 2020 - 2021 <a href="">Comercial - San Pedro</a></p>
        </div>
    </div><!--/.row-->
</div>


<!-- <script src="js/jquery-1.11.1.min.js"></script>-->
<script src="{{ asset('js/rPlantilla/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('js/rPlantilla/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/rPlantilla/chart.min.js') }}"></script>
<script src="{{ asset('js/rPlantilla/chart-data.js') }}"></script>
<script src="{{ asset('js/rPlantilla/easypiechart.js') }} "></script>
<script src="{{ asset('js/rPlantilla/easypiechart-data.js') }}"></script>
<script src="{{ asset('js/rPlantilla/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('js/rPlantilla/custom.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#datatable').dataTable( {
            pagin: true,
            "lengthMenu": [[5, 10, 25, 50, -1],[5, 10, 25, 50, "Todo"]],
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json"
            }
        } );
    });
</script>

<script src="{{ asset('js/rPlantilla/datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/rPlantilla/datatable/js/dataTables.bootstrap4.min.js') }}"></script>

</body>
</html>

