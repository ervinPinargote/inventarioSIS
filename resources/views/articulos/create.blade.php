<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h3 class="modal-title" id="exampleModalLabel"> Registrar Artículos</h3>

        </div>

        <div class="modal-body">

            <form role="form" method="POST" action="{{ url ("/articulos")}}">
                <fieldset>
                    @csrf
                    <div class="row">
                        <div class="col-md-12 pr-1">
                            <div class="form-group">
                                <label>Código: </label>
                                <input type="text" name="Codigo" value="" class="form-control"  maxlength="10"  id="Codigo">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Nombre Artículo: </label>
                                <input class="form-control" placeholder="Nombre Artículo:" name="Nombre_Articulo" type="text" value="" autofocus="">

                            </div>
                        </div>
                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label>Color: </label>

                                <select class="form-control" placeholder="Color" name="color" >
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
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Talla: </label>
                                <input class="form-control" placeholder="Talla" name="talla"  value="" type="text" autofocus="">

                            </div>
                        </div>
                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label>Procedencia: </label>
                                <input class="form-control" placeholder="Procedencia" name="procedencia"  value="" type="text" autofocus="">
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
                                <label>Proveedor: </label>
                                <select class="form-control" placeholder="Proveedor" name="proveedor_id" >
                                    @foreach ( $proveedores as $prov)
                                        <option value="{{$prov->id}}">{{$prov->nombre_empresa}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Cantidad: </label>
                                <input class="form-control" placeholder="Cantidad" name="cantidad" value="" type="text" autofocus="">
                            </div>
                        </div>

                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label>Promociones: </label>

                                <select class="form-control" placeholder="promocion_id" name="promocion_id" >
                                    @foreach ( $promociones as $prom)
                                        <option value="{{$prom->id}}">{{$prom->detalle}}</option>
                                    @endforeach
                                </select>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Precio Unitario: </label>
                                <input class="form-control" placeholder="Precio Unitario" name="precio" value="" type="number" step="any" autofocus="">
                            </div>
                        </div>
                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label>Porcentaje de Ganacia: </label>
                                <select class="form-control" placeholder="Porcentaje de Ganancia" name="porcentajeG" >
                                    <option value="10" selected>10%</option>
                                    <option value="20">20%</option>
                                    <option value="25">25%</option>
                                    <option value="50">50%</option>
                                    <option value="55">55%</option>
                                    <option value="60">60%</option>
                                    <option value="70">70%</option>
                                    <option value="80">80%</option>
                                    <option value="90">90%</option>
                                    <option value="100">100%</option>
                                </select>
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
