<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h3 class="modal-title" id="exampleModalLabel"> Registro Detalles Compras</h3>

        </div>

        <div class="modal-body">

            <form role="form" method="POST" action="{{ url ("/items_detalle")}}">
                <fieldset>
                    @csrf
                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Código: </label>
                                <input type="text" name="codigo" value="{{$cod}}" class="form-control"  maxlength="10"  id="codigo" readonly required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Nombre Artículo: </label>
                                <input class="form-control" placeholder="Nombre Item:" name="nombre_item" type="text" value="" autofocus="" required>
                            </div>
                        </div>
                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label>Color: </label>
                                <select class="form-control" placeholder="Color" name="color" aria-readonly="True">
                                    <option value="Negro">Negro </option>
                                    <option value="Blanco">Blanco </option>
                                    <option value="Azul Marino"> Azul Marino</option>
                                    <option value="Azul">  Azul </option>
                                    <option value="Amarillo"> Amarillo </option>
                                    <option value="Rojo"> Rojo </option>
                                    <option value="Caoba">Caoba </option>
                                    <option value="Beige">Beige </option>
                                    <option value="Celeste">Celeste </option>
                                    <option value="Verde">Verde </option>
                                    <option value="Verde agua">Verde agua  </option>
                                    <option value="Rosado">Rosado </option>
                                    <option value="Naranja">Naranja  </option>
                                    <option value="Gris">Gris </option>
                                    <option value="Marron">Marron </option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 pr-1">
                            <div class="form-group">
                                <label>Detalle del Item: </label>
                                <textarea class="form-control"  name="detalle_item" id="detalle_item"  rows="4" cols="50" required>
                                </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Talla: </label>
                                <input class="form-control" placeholder="Talla" name="talla"  value="" type="text" autofocus="" required>

                            </div>
                        </div>
                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label>Cantidad: </label>
                                <input class="form-control" placeholder="Cantidad " name="cantidad"  value="" type="number" autofocus="" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Categoria: </label>
                                <select class="form-control" placeholder="Categoria" name="categoria_id" >
                                    @foreach ( $categoria as $cat)
                                        <option value="{{$cat->idCategoria}}">{{$cat->Nombre_Categoria}}</option>
                                    @endforeach
                                </select>

                            </div>
                        </div>
                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <div class="form-group">
                                    <label>Precio Unitario: </label>
                                    <input class="form-control" placeholder="Precio Unitario" name="precio_unitario" value="" type="number" step="any" autofocus="" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <input class="form-control" placeholder="Procedencia" name="compra_id"  value="{{$compras->id}}" type="hidden" autofocus="" readonly required>

                    <input type="submit" value="Registrar" name="Agregar datos." class="btn btn-primary">
                    <a class="btn btn-default" href="">Cancelar</a>

                    <br>
                </fieldset>
            </form>
        </div>
    </div>
</div>
