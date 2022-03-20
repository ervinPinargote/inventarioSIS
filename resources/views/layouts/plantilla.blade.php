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
			<div class="profile-usertitle">
                @if (Auth::user())
                    <div class="profile-usertitle-name">{{ Auth::user()->name }}</div>
				    <div class="profile-usertitle-status"><span class="indicator label-success"></span>En linea</div>
                @else
                    <div class="profile-usertitle-name">Iniciar Session</div>
				    <div class="profile-usertitle-status"><span class="indicator label-error"></span>Fuera de Linea</div>
                @endif

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
            @yield('Menu_lateral')

		</ul>
	</div><!--/.sidebar-->

    <!-- Bloque de lado derecho de la pagina -->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
                @yield('tittle_pincipal')

			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
                 @yield('tittle_sub')

			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
                        @yield('tittle_fun')
						<ul class="pull-right panel-settings panel-button-tab-right">
							<li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
								<em class="fa fa-cogs"></em>
							</a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li>
										<ul class="dropdown-settings">
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 1
											</a></li>
											<li class="divider"></li>
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 2
											</a></li>
											<li class="divider"></li>
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 3
											</a></li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
                        @yield('content_dinamic')

					</div>
				</div>
        </div>

        </div><!--/.row-->
			<div class="col-sm-12">
				<p class="back-link">Lumino Theme by <a href="https://www.medialoot.com">Medialoot</a></p>
			</div>
		</div><!--/.row-->


    <!-- <script src="js/jquery-1.11.1.min.js"></script>-->
    <script src="{{ asset('js/rPlantilla/jquery-1.11.1.min.js') }}"></script>
	<script src="{{ asset('js/rPlantilla/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/rPlantilla/chart.min.js') }}"></script>
	<script src="{{ asset('js/rPlantilla/chart-data.js') }}"></script>
	<script src="{{ asset('js/rPlantilla/easypiechart.js') }} "></script>
	<script src="{{ asset('js/rPlantilla/easypiechart-data.js') }}"></script>
	<script src="{{ asset('js/rPlantilla/bootstrap-datepicker.js') }}"></script>
	<script src="{{ asset('js/rPlantilla/custom.js') }}"></script>
    <script src="{{ asset('js/rPlantilla/adicional.js') }}"></script>
	<script>
		window.onload = function () {
	    var chart1 = document.getElementById("line-chart").getContext("2d");
	    window.myLine = new Chart(chart1).Line(lineChartData, {
	    responsive: true,
	    scaleLineColor: "rgba(0,0,0,.2)",
	    scaleGridLineColor: "rgba(0,0,0,.05)",
	    scaleFontColor: "#c5c7cc"
	    });};
	</script>
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


    <div class="modal fade" id="modalG" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    @yield('content_TitleModal')
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    @yield('content_BodyModal')
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
