<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h3 class="modal-title" id="exampleModalLabel"> Registrar Promociones</h3>

        </div>

        <div class="modal-body">

            <form role="form" method="post" action="{{ url ("/promociones")}}">
                <fieldset>
                    @csrf
                    <div class="row">
                        <div class="col-md-12 pr-1">
                            <div class="form-group">
                                <label>Detalle Promoción: </label>
                                <input type="text" name="detalle" value="" class="form-control"  maxlength="100"  id="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 pr-1">
                            <div class="form-group">
                                <label>Porcentaje descuento: </label>
                                <input type="number" name="porcentaje" value="" class="form-control"  maxlength="100"  id="">
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
