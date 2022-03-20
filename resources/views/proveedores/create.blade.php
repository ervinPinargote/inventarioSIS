<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h3 class="modal-title" id="exampleModalLabel"> Registrar Proveedor</h3>

        </div>

        <div class="modal-body">

            <form role="form" method="post" action="{{ url ("/proveedores")}}">
                <fieldset>
                    @csrf
                    <div class="row">
                        <div class="col-md-12 pr-1">
                            <div class="form-group">
                                <label>Ruc/id: </label>
                                <input type="text" name="ruc" value="" class="form-control"  maxlength="13"  id="id_ci">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 pr-1">
                            <div class="form-group">
                                <label>Nombre Empresa: </label>
                                <input class="form-control" placeholder="Nombre de la Empresa" name="nombre_empresa" type="text" value="" autofocus="">

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Correo Electronico: </label>
                                <input class="form-control" placeholder="correo electronico" name="correo"  value="" type="email" autofocus="">

                            </div>
                        </div>
                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label>Telefono: </label>
                                <input class="form-control" placeholder="telefono" name="telefono"  value="" type="text" autofocus="">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 pr-1">
                            <div class="form-group">
                                <label>Direccion: </label>
                                <input class="form-control" placeholder="direccion" name="direcion" value="" type="text" autofocus="">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 pr-1">
                            <div class="form-group">
                                <label>Observaciones: </label>
                                <textarea  class="form-control" name="observaciones" placeholder="Escribir observaciones de ser necesario" rows="2" cols="50"></textarea>
                            </div>
                        </div>
                    </div>
                    <input type="submit" value="Registrar" name="update" class="btn btn-primary">
                    <a class="btn btn-default" href="">Cancelar</a>
                </fieldset>
            </form>
        </div>
    </div>
</div>
