<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h3 class="modal-title" id="exampleModalLabel"> Generar Ticked de Venta. </h3>
        </div>
        <div class="modal-body">

            <form role="form" method="post" action="{{ url('/ventas') }}">
                <fieldset>
                    @csrf
                    <div class="row">
                        <div class="col-md-12 pr-1">
                            <div class="form-group">
                                <label>Código Venta: </label>
                                <input type="text" placeholder="Código Guardado en sistema:" name="codigo_venta"
                                    value="{{ $cod }}" class="form-control" maxlength="10" id="codigo_venta"
                                    readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label>Seleccionar Cliente: <a class="" title="Nuevo Cliente"> <input
                                            type="checkbox" id="cbox1" name="opcioncliente" value="nuevo_cli"> Cliente Nuevo</a></label>
                                <select class="form-control" placeholder="Cliente" name="cliente_id">
                                    @foreach ($clientes as $clie)
                                        <option value="{{ $clie->id }}">{{ $clie->nombres }} {{ $clie->apellidos }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Vendedor: </label>
                                <input class="form-control" placeholder="540000000015" name="vendedor_id" type="text"
                                    value="2" autofocus="">
                            </div>
                        </div>
                    </div>

                    <div id="datos_cliente" name="datos_cliente" class="ocultar">
                        <div class="row">
                            <div class="col-md-12 pr-1">
                                <div class="form-group">
                                    <label>Cedula/Pasaporte</label>
                                    <input type="text" name="ci" value="" class="form-control" maxlength="10"
                                        id="id_ci">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>Nombres: </label>
                                    <input class="form-control" placeholder="nombres" name="nombres" type="text"
                                        value="" autofocus="">

                                </div>
                            </div>
                            <div class="col-md-6 pl-1">
                                <div class="form-group">
                                    <label>Apellidos: </label>
                                    <input class="form-control" placeholder="apellidos" name="apellidos" value=""
                                        type="text" autofocus="">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>Fecha Nacimiento: </label>
                                    <input class="form-control" placeholder="fecha_Nac" name="fecha_Nac" value=""
                                        type="text" autofocus="">

                                </div>
                            </div>
                            <div class="col-md-6 pl-1">
                                <div class="form-group">
                                    <label>Telefono: </label>
                                    <input class="form-control" placeholder="telefono" name="telefono" value=""
                                        type="text" autofocus="">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 pr-1">
                                <div class="form-group">
                                    <label>Direccion: </label>
                                    <input class="form-control" placeholder="direccion" name="direccion" value=""
                                        type="text" autofocus="">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 pr-1">
                                <div class="form-group">
                                    <label>Correo Electronico: </label>
                                    <input class="form-control" placeholder="E-mail" name="correo" type="email"
                                        value="" autofocus="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="submit" value="Registrar ticked." name="update" class="btn btn-primary">
                    <a class="btn btn-default" href="">Cancelar</a>
                </fieldset>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
$('input[type=checkbox]').on('change', function() {
    if ($(this).is(':checked') ) {
        console.log("Checkbox " + $(this).prop("id") +  " (" + $(this).val() + ") => Seleccionado");
        document.getElementById("datos_cliente").classList.add("mostrar");

    } else {
        console.log("Checkbox " + $(this).prop("id") +  " (" + $(this).val() + ") => Deseleccionado");
        document.getElementById("datos_cliente").classList.remove("mostrar")
    }
});





</script>
