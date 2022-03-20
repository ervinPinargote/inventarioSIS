<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h3 class="modal-title" id="exampleModalLabel"> Registrar Compras de Mercaderia </h3>
        </div>
        <div class="modal-body">

            <form role="form" method="post" action="{{ url ("/compras")}}">
                <fieldset>
                    @csrf
                    <div class="row">
                        <div class="col-md-12 pr-1">
                            <div class="form-group">
                                <label>Código: </label>
                                <input type="text" placeholder="Código Guardado en sistema:" name="codigo_compra" value="{{$cod}}" class="form-control"  maxlength="10"  id="codigo_compra" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label>Proveedor: <a class="btn btn-success" onclick="abrirmodal('{{ url ("/proveedores/create")}}');" title="Nuevo"><i class="fa fa-plus fa-1"></i> </a></label>
                                <select class="form-control" placeholder="Proveedor" name="id_proveedor" >
                                    @foreach ( $proveedores as $prov)
                                        <option value="{{$prov->id}}">{{$prov->nombre_empresa}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>N. de Referencia: </label>
                                <input class="form-control" placeholder="540000000015" name="referencia" type="text" value="" autofocus="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label>Fecha: </label>
                                <input class="form-control" placeholder="Fecha de compra" name="fecha" type="date" value="" autofocus="">
                            </div>
                        </div>
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Subtotal: </label>
                                <input class="form-control" placeholder="Subtotal" name="subtotal"  value="" type="number" step="any" autofocus="">

                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label>Iva: </label>
                                <input class="form-control" placeholder="Iva grabado en compra" name="iva"  value="12" type="text" autofocus="">
                            </div>
                        </div>
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Total: </label>
                                <input class="form-control" placeholder="Total" name="valor_total" value="" step="any" type="number" autofocus="">
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
